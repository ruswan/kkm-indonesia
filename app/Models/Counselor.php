<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Counselor
 *
 * Represents a counselor in the KKMI system.
 *
 *
 * @property int $id Primary key
 * @property int $user_id Foreign key to users table
 * @property string $registration_number KKMI registration number
 * @property string $degree Professional degree
 * @property string $province Province domicile
 * @property string $city City domicile
 * @property string $whatsapp_number WhatsApp contact number
 * @property string $contact_email Alternate email address
 * @property string|null $profile_photo Profile image path
 * @property string|null $instagram_link Instagram profile link
 * @property string|null $tiktok_link TikTok profile link
 * @property string|null $facebook_link Facebook profile link
 * @property string $validation_status Member validation status (pending, approved, rejected)
 * @property \Carbon\Carbon $created_at Creation timestamp
 * @property \Carbon\Carbon $updated_at Last update timestamp
 * @property-read \App\Models\User $user User relationship
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Counselor approved()
 * @method static \Illuminate\Database\Eloquent\Builder|Counselor pending()
 * @method static \Illuminate\Database\Eloquent\Builder|Counselor rejected()
 * @method static \Illuminate\Database\Eloquent\Builder|Counselor byProvince(string $province)
 * @method static \Illuminate\Database\Eloquent\Builder|Counselor byCity(string $city)
 */
class Counselor extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'counselors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'registration_number',
        'degree',
        'province',
        'city',
        'whatsapp_number',
        'contact_email',
        'profile_photo',
        'instagram_link',
        'tiktok_link',
        'facebook_link',
        'validation_status',
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
     * Get the user that owns the counselor profile.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include approved counselors.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('validation_status', 'approved');
    }

    /**
     * Scope a query to only include pending counselors.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('validation_status', 'pending');
    }

    /**
     * Scope a query to only include rejected counselors.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRejected($query)
    {
        return $query->where('validation_status', 'rejected');
    }

    /**
     * Scope a query to filter counselors by province.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $province
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByProvince($query, $province)
    {
        return $query->where('province', $province);
    }

    /**
     * Scope a query to filter counselors by city.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $city
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByCity($query, $city)
    {
        return $query->where('city', $city);
    }

    /**
     * Get the counselor's full location string.
     *
     * @return string
     */
    public function getFullLocationAttribute()
    {
        return $this->city.', '.$this->province;
    }

    /**
     * Check if the counselor is approved.
     *
     * @return bool
     */
    public function isApproved()
    {
        return $this->validation_status === 'approved';
    }

    /**
     * Check if the counselor is pending.
     *
     * @return bool
     */
    public function isPending()
    {
        return $this->validation_status === 'pending';
    }

    /**
     * Check if the counselor is rejected.
     *
     * @return bool
     */
    public function isRejected()
    {
        return $this->validation_status === 'rejected';
    }
}
