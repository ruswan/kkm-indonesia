<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

/**
 * Class Article
 *
 * Represents an article in the system.
 *
 *
 * @property int $id Primary key
 * @property string $title Article title
 * @property string $slug SEO-friendly URL slug
 * @property string $content Article body content
 * @property string $category Article category (e.g. education, news, announcement)
 * @property int $author_id Foreign key to users table
 * @property string|null $thumbnail Cover image path
 * @property \Carbon\Carbon|null $published_at Publication date
 * @property \Carbon\Carbon $created_at Creation timestamp
 * @property \Carbon\Carbon $updated_at Last update timestamp
 * @property-read \App\Models\User $author Author relationship
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Article published()
 * @method static \Illuminate\Database\Eloquent\Builder|Article unpublished()
 * @method static \Illuminate\Database\Eloquent\Builder|Article byCategory(string $category)
 * @method static \Illuminate\Database\Eloquent\Builder|Article byAuthor(int $authorId)
 * @method static \Illuminate\Database\Eloquent\Builder|Article recent()
 */
class Article extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
        'author_id',
        'thumbnail',
        'published_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the author that owns the article.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Scope a query to only include published articles.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Scope a query to only include unpublished articles.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnpublished($query)
    {
        return $query->whereNull('published_at')
            ->orWhere('published_at', '>', now());
    }

    /**
     * Scope a query to filter articles by category.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $category
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Scope a query to filter articles by author.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $authorId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByAuthor($query, $authorId)
    {
        return $query->where('author_id', $authorId);
    }

    /**
     * Scope a query to order articles by most recent.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('published_at', 'desc')
            ->orderBy('created_at', 'desc');
    }

    /**
     * Check if the article is published.
     *
     * @return bool
     */
    public function isPublished()
    {
        return $this->published_at !== null && $this->published_at <= now();
    }

    /**
     * Get the article's excerpt.
     *
     * @param  int  $length
     * @return string
     */
    public function getExcerpt($length = 150)
    {
        return Str::limit(strip_tags($this->content), $length);
    }

    /**
     * Get the article's reading time estimate.
     *
     * @return int Minutes to read
     */
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));

        return max(1, ceil($wordCount / 200)); // Assuming 200 words per minute
    }

    /**
     * Automatically generate slug when title is set.
     *
     * @param  string  $value
     * @return void
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (empty($this->attributes['slug'])) {
            $this->attributes['slug'] = Str::slug($value);
        }
    }
}
