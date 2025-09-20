<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 *
 * Represents contact information for the organization.
 *
 *
 * @property int $id Primary key
 * @property string $email Central email address
 * @property string $whatsapp_number Central WhatsApp contact number
 * @property string $office_address Office address
 * @property \Carbon\Carbon $created_at Creation timestamp
 * @property \Carbon\Carbon $updated_at Last update timestamp
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Contact active()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact latest()
 */
class Contact extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'whatsapp_number',
        'office_address',
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
     * Scope a query to get the most recent contact information.
     * This is useful if you want to maintain a history of contact changes.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Scope a query to get active contact information.
     * This can be extended to include an 'active' field if needed.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->latest();
    }

    /**
     * Get the current active contact information.
     * Returns the most recently created contact record.
     *
     * @return Contact|null
     */
    public static function current()
    {
        return static::latest()->first();
    }

    /**
     * Get formatted WhatsApp URL for click-to-chat.
     *
     * @param  string|null  $message
     * @return string
     */
    public function getWhatsappUrlAttribute($message = null)
    {
        $number = preg_replace('/[^0-9]/', '', $this->whatsapp_number);

        // Add country code if not present (assuming Indonesia +62)
        if (! str_starts_with($number, '62')) {
            $number = '62'.ltrim($number, '0');
        }

        $url = "https://wa.me/{$number}";

        if ($message) {
            $url .= '?text='.urlencode($message);
        }

        return $url;
    }

    /**
     * Get formatted WhatsApp number for display.
     *
     * @return string
     */
    public function getFormattedWhatsappAttribute()
    {
        $number = $this->whatsapp_number;

        // Format Indonesian phone numbers
        if (preg_match('/^(\+?62|0)(\d{2,3})(\d{4})(\d{4,})$/', $number, $matches)) {
            return "+62 {$matches[2]} {$matches[3]} {$matches[4]}";
        }

        return $number;
    }

    /**
     * Get Google Maps URL for the office address.
     *
     * @return string
     */
    public function getGoogleMapsUrlAttribute()
    {
        return 'https://www.google.com/maps/search/'.urlencode($this->office_address);
    }

    /**
     * Get mailto URL for the email.
     *
     * @param  string|null  $subject
     * @param  string|null  $body
     * @return string
     */
    public function getMailtoUrlAttribute($subject = null, $body = null)
    {
        $url = "mailto:{$this->email}";
        $params = [];

        if ($subject) {
            $params['subject'] = $subject;
        }

        if ($body) {
            $params['body'] = $body;
        }

        if (! empty($params)) {
            $url .= '?'.http_build_query($params);
        }

        return $url;
    }

    /**
     * Validate email format.
     *
     * @return bool
     */
    public function hasValidEmail()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Validate WhatsApp number format (basic validation).
     *
     * @return bool
     */
    public function hasValidWhatsappNumber()
    {
        $number = preg_replace('/[^0-9]/', '', $this->whatsapp_number);

        return strlen($number) >= 10 && strlen($number) <= 15;
    }

    /**
     * Get all contact methods as an array.
     *
     * @return array
     */
    public function getAllContactMethods()
    {
        return [
            'email' => [
                'value' => $this->email,
                'url' => $this->mailto_url,
                'valid' => $this->hasValidEmail(),
            ],
            'whatsapp' => [
                'value' => $this->formatted_whatsapp,
                'url' => $this->whatsapp_url,
                'valid' => $this->hasValidWhatsappNumber(),
            ],
            'address' => [
                'value' => $this->office_address,
                'url' => $this->google_maps_url,
                'valid' => ! empty($this->office_address),
            ],
        ];
    }
}
