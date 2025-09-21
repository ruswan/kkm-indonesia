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
        return $this->hasMany(Counselor::class);
    }
}
