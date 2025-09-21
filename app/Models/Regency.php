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
        return $this->hasMany(Counselor::class);
    }
}
