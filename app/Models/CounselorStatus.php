<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class CounselorStatus
 *
 * Represents a counselor status in the system.
 *
 *
 * @property int $id Primary key
 * @property string $name Status name
 * @property string $slug Status slug for URL
 * @property string|null $description Status description
 * @property string $color Hex color code for UI display
 * @property bool $is_active Whether the status is active
 * @property int $sort_order Sorting order
 * @property \Carbon\Carbon $created_at Creation timestamp
 * @property \Carbon\Carbon $updated_at Last update timestamp
 * @property \Carbon\Carbon|null $deleted_at Soft delete timestamp
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Counselor[] $counselors
 * @property-read int|null $counselors_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CounselorStatus active()
 * @method static \Illuminate\Database\Eloquent\Builder|CounselorStatus ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|CounselorStatus withCounselorsCount()
 * @method static \Illuminate\Database\Eloquent\Builder|CounselorStatus search(string $term)
 */
class CounselorStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'counselor_statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * Get the counselors that have this status.
     */
    public function counselors(): HasMany
    {
        return $this->hasMany(Counselor::class, 'status_id');
    }
}
