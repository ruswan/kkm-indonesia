<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Province
 *
 * Represents a province in Indonesia.
 *
 *
 * @property int $id Primary key
 * @property string $name Province name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Regency[] $regencies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Counselor[] $counselors
 * @property-read int|null $regencies_count
 * @property-read int|null $counselors_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Province withRegenciesCount()
 * @method static \Illuminate\Database\Eloquent\Builder|Province withCounselorsCount()
 * @method static \Illuminate\Database\Eloquent\Builder|Province search(string $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Province alphabetical()
 */
class Province extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provinces';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the regencies that belong to this province.
     */
    public function regencies(): HasMany
    {
        return $this->hasMany(Regency::class);
    }

    /**
     * Get the counselors that belong to this province.
     */
    public function counselors(): HasMany
    {
        return $this->hasMany(Counselor::class, 'province', 'name');
    }

    /**
     * Scope a query to include regencies count.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithRegenciesCount($query)
    {
        return $query->withCount('regencies');
    }

    /**
     * Scope a query to include counselors count.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithCounselorsCount($query)
    {
        return $query->withCount('counselors');
    }

    /**
     * Scope a query to search provinces by name.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $term
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $term)
    {
        return $query->where('name', 'like', "%{$term}%");
    }

    /**
     * Scope a query to order provinces alphabetically.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAlphabetical($query)
    {
        return $query->orderBy('name', 'asc');
    }

    /**
     * Get the total number of regencies in this province.
     *
     * @return int
     */
    public function getTotalRegenciesAttribute()
    {
        return $this->regencies()->count();
    }

    /**
     * Get the total number of counselors in this province.
     *
     * @return int
     */
    public function getTotalCounselorsAttribute()
    {
        return $this->counselors()->count();
    }

    /**
     * Get the total number of approved counselors in this province.
     *
     * @return int
     */
    public function getApprovedCounselorsAttribute()
    {
        return $this->counselors()->where('validation_status', 'approved')->count();
    }

    /**
     * Check if this province has any regencies.
     *
     * @return bool
     */
    public function hasRegencies()
    {
        return $this->regencies()->exists();
    }

    /**
     * Check if this province has any counselors.
     *
     * @return bool
     */
    public function hasCounselors()
    {
        return $this->counselors()->exists();
    }

    /**
     * Get province statistics.
     *
     * @return array
     */
    public function getStatistics()
    {
        return [
            'total_regencies' => $this->total_regencies,
            'total_counselors' => $this->total_counselors,
            'approved_counselors' => $this->approved_counselors,
            'pending_counselors' => $this->counselors()->where('validation_status', 'pending')->count(),
            'rejected_counselors' => $this->counselors()->where('validation_status', 'rejected')->count(),
        ];
    }

    /**
     * Get the most popular regencies (by counselor count).
     *
     * @param  int  $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPopularRegencies($limit = 5)
    {
        return $this->regencies()
            ->withCount('counselors')
            ->orderBy('counselors_count', 'desc')
            ->limit($limit)
            ->get();
    }

    /**
     * Get a formatted name for display.
     *
     * @return string
     */
    public function getDisplayNameAttribute()
    {
        return 'Provinsi '.$this->name;
    }

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
