<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Regency
 *
 * Represents a regency/city (kabupaten/kota) in Indonesia.
 *
 *
 * @property int $id Primary key
 * @property string $name Regency/city name
 * @property int $province_id Foreign key to provinces table
 * @property-read \App\Models\Province $province
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Counselor[] $counselors
 * @property-read int|null $counselors_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Regency withCounselorsCount()
 * @method static \Illuminate\Database\Eloquent\Builder|Regency byProvince(int $provinceId)
 * @method static \Illuminate\Database\Eloquent\Builder|Regency search(string $term)
 * @method static \Illuminate\Database\Eloquent\Builder|Regency alphabetical()
 * @method static \Illuminate\Database\Eloquent\Builder|Regency withProvince()
 */
class Regency extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regencies';

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
        'province_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'province_id' => 'integer',
    ];

    /**
     * Get the province that owns this regency.
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get the counselors that belong to this regency.
     */
    public function counselors(): HasMany
    {
        return $this->hasMany(Counselor::class, 'city', 'name');
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
     * Scope a query to filter regencies by province.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  int  $provinceId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByProvince($query, $provinceId)
    {
        return $query->where('province_id', $provinceId);
    }

    /**
     * Scope a query to search regencies by name.
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
     * Scope a query to order regencies alphabetically.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAlphabetical($query)
    {
        return $query->orderBy('name', 'asc');
    }

    /**
     * Scope a query to include province information.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithProvince($query)
    {
        return $query->with('province');
    }

    /**
     * Get the total number of counselors in this regency.
     *
     * @return int
     */
    public function getTotalCounselorsAttribute()
    {
        return $this->counselors()->count();
    }

    /**
     * Get the total number of approved counselors in this regency.
     *
     * @return int
     */
    public function getApprovedCounselorsAttribute()
    {
        return $this->counselors()->where('validation_status', 'approved')->count();
    }

    /**
     * Check if this regency has any counselors.
     *
     * @return bool
     */
    public function hasCounselors()
    {
        return $this->counselors()->exists();
    }

    /**
     * Get regency statistics.
     *
     * @return array
     */
    public function getStatistics()
    {
        return [
            'total_counselors' => $this->total_counselors,
            'approved_counselors' => $this->approved_counselors,
            'pending_counselors' => $this->counselors()->where('validation_status', 'pending')->count(),
            'rejected_counselors' => $this->counselors()->where('validation_status', 'rejected')->count(),
        ];
    }

    /**
     * Get the full location name (Regency, Province).
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->name.', '.$this->province->name;
    }

    /**
     * Get a formatted name for display.
     *
     * @return string
     */
    public function getDisplayNameAttribute()
    {
        $type = $this->getRegencyType();

        return $type.' '.$this->name;
    }

    /**
     * Determine if this is a city (kota) or regency (kabupaten).
     *
     * @return string
     */
    public function getRegencyType()
    {
        $cityKeywords = ['Kota', 'Jakarta', 'Yogyakarta'];

        foreach ($cityKeywords as $keyword) {
            if (stripos($this->name, $keyword) !== false) {
                return 'Kota';
            }
        }

        return 'Kabupaten';
    }

    /**
     * Check if this is a city (kota).
     *
     * @return bool
     */
    public function isCity()
    {
        return $this->getRegencyType() === 'Kota';
    }

    /**
     * Check if this is a regency (kabupaten).
     *
     * @return bool
     */
    public function isRegency()
    {
        return $this->getRegencyType() === 'Kabupaten';
    }

    /**
     * Get the counselor density (counselors per regency).
     *
     * @return float
     */
    public function getCounselorDensityAttribute()
    {
        return $this->total_counselors;
    }

    /**
     * Get nearby regencies (same province).
     *
     * @param  int  $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getNearbyRegencies($limit = 10)
    {
        return static::where('province_id', $this->province_id)
            ->where('id', '!=', $this->id)
            ->alphabetical()
            ->limit($limit)
            ->get();
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
