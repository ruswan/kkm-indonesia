<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Gallery
 *
 * Represents a gallery item (photo or video) in the system.
 *
 *
 * @property int $id Primary key
 * @property string $title Album or photo title
 * @property string|null $description Description of the media
 * @property string $file_path File path to the media
 * @property string $type File type (photo or video)
 * @property \Carbon\Carbon $created_at Creation timestamp
 * @property \Carbon\Carbon $updated_at Last update timestamp
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery photos()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery videos()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery recent()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery search(string $term)
 */
class Gallery extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'galleries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'type',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * The possible file types for gallery items.
     *
     * @var array<string>
     */
    const TYPES = ['photo', 'video'];

    /**
     * Scope a query to only include photos.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePhotos($query)
    {
        return $query->where('type', 'photo');
    }

    /**
     * Scope a query to only include videos.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }

    /**
     * Scope a query to order gallery items by most recent.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Scope a query to search gallery items by title or description.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $term
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(function ($q) use ($term) {
            $q->where('title', 'like', "%{$term}%")
                ->orWhere('description', 'like', "%{$term}%");
        });
    }

    /**
     * Check if the gallery item is a photo.
     *
     * @return bool
     */
    public function isPhoto()
    {
        return $this->type === 'photo';
    }

    /**
     * Check if the gallery item is a video.
     *
     * @return bool
     */
    public function isVideo()
    {
        return $this->type === 'video';
    }

    /**
     * Get the full URL to the file.
     *
     * @return string
     */
    public function getFileUrlAttribute()
    {
        if (filter_var($this->file_path, FILTER_VALIDATE_URL)) {
            return $this->file_path;
        }

        return Storage::url($this->file_path);
    }

    /**
     * Get the file size in bytes.
     *
     * @return int|null
     */
    public function getFileSizeAttribute()
    {
        if (filter_var($this->file_path, FILTER_VALIDATE_URL)) {
            return null; // Cannot determine size for external URLs
        }

        if (Storage::exists($this->file_path)) {
            return Storage::size($this->file_path);
        }

        return null;
    }

    /**
     * Get the formatted file size.
     *
     * @return string|null
     */
    public function getFormattedFileSizeAttribute()
    {
        $size = $this->file_size;

        if (! $size) {
            return null;
        }

        $units = ['B', 'KB', 'MB', 'GB'];
        $unitIndex = 0;

        while ($size >= 1024 && $unitIndex < count($units) - 1) {
            $size /= 1024;
            $unitIndex++;
        }

        return round($size, 2).' '.$units[$unitIndex];
    }

    /**
     * Get the file extension.
     *
     * @return string|null
     */
    public function getFileExtensionAttribute()
    {
        return pathinfo($this->file_path, PATHINFO_EXTENSION);
    }

    /**
     * Get the mime type based on file extension.
     *
     * @return string|null
     */
    public function getMimeTypeAttribute()
    {
        $extension = $this->file_extension;

        if (! $extension) {
            return null;
        }

        $mimeTypes = [
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'webp' => 'image/webp',
            'mp4' => 'video/mp4',
            'webm' => 'video/webm',
            'avi' => 'video/avi',
            'mov' => 'video/quicktime',
        ];

        return $mimeTypes[strtolower($extension)] ?? null;
    }

    /**
     * Check if the file exists.
     *
     * @return bool
     */
    public function fileExists()
    {
        if (filter_var($this->file_path, FILTER_VALIDATE_URL)) {
            return true; // Assume external URLs are valid
        }

        return Storage::exists($this->file_path);
    }

    /**
     * Delete the file from storage when the model is deleted.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($gallery) {
            if (! filter_var($gallery->file_path, FILTER_VALIDATE_URL) && Storage::exists($gallery->file_path)) {
                Storage::delete($gallery->file_path);
            }
        });
    }
}
