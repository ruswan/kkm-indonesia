<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * Represents an event in the system.
 *
 *
 * @property int $id Primary key
 * @property string $name Event name
 * @property string $description Event details and description
 * @property \Carbon\Carbon $start_date Event start date
 * @property \Carbon\Carbon $end_date Event end date
 * @property string $location Physical or online location
 * @property string|null $registration_link Registration form URL
 * @property string $organizer Organizer name
 * @property \Carbon\Carbon $created_at Creation timestamp
 * @property \Carbon\Carbon $updated_at Last update timestamp
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Event upcoming()
 * @method static \Illuminate\Database\Eloquent\Builder|Event ongoing()
 * @method static \Illuminate\Database\Eloquent\Builder|Event past()
 * @method static \Illuminate\Database\Eloquent\Builder|Event byOrganizer(string $organizer)
 * @method static \Illuminate\Database\Eloquent\Builder|Event inDateRange(\Carbon\Carbon $startDate, \Carbon\Carbon $endDate)
 */
class Event extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'location',
        'registration_link',
        'organizer',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope a query to only include upcoming events.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', now()->toDateString())
            ->orderBy('start_date', 'asc');
    }

    /**
     * Scope a query to only include ongoing events.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOngoing($query)
    {
        $today = now()->toDateString();

        return $query->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today);
    }

    /**
     * Scope a query to only include past events.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePast($query)
    {
        return $query->where('end_date', '<', now()->toDateString())
            ->orderBy('end_date', 'desc');
    }

    /**
     * Scope a query to filter events by organizer.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $organizer
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByOrganizer($query, $organizer)
    {
        return $query->where('organizer', $organizer);
    }

    /**
     * Scope a query to filter events within a date range.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInDateRange($query, $startDate, $endDate)
    {
        return $query->where(function ($q) use ($startDate, $endDate) {
            $q->whereBetween('start_date', [$startDate, $endDate])
                ->orWhereBetween('end_date', [$startDate, $endDate])
                ->orWhere(function ($subQ) use ($startDate, $endDate) {
                    $subQ->where('start_date', '<=', $startDate)
                        ->where('end_date', '>=', $endDate);
                });
        });
    }

    /**
     * Check if the event is upcoming.
     *
     * @return bool
     */
    public function isUpcoming()
    {
        return $this->start_date > now()->toDateString();
    }

    /**
     * Check if the event is ongoing.
     *
     * @return bool
     */
    public function isOngoing()
    {
        $today = now()->toDateString();

        return $this->start_date <= $today && $this->end_date >= $today;
    }

    /**
     * Check if the event is past.
     *
     * @return bool
     */
    public function isPast()
    {
        return $this->end_date < now()->toDateString();
    }

    /**
     * Get the event duration in days.
     *
     * @return int
     */
    public function getDurationAttribute()
    {
        return $this->start_date->diffInDays($this->end_date) + 1;
    }

    /**
     * Get the event status.
     *
     * @return string
     */
    public function getStatusAttribute()
    {
        if ($this->isUpcoming()) {
            return 'upcoming';
        } elseif ($this->isOngoing()) {
            return 'ongoing';
        } else {
            return 'past';
        }
    }

    /**
     * Get formatted date range for display.
     *
     * @return string
     */
    public function getFormattedDateRangeAttribute()
    {
        if ($this->start_date->isSameDay($this->end_date)) {
            return $this->start_date->format('d M Y');
        }

        if ($this->start_date->isSameMonth($this->end_date)) {
            return $this->start_date->format('d').' - '.$this->end_date->format('d M Y');
        }

        return $this->start_date->format('d M').' - '.$this->end_date->format('d M Y');
    }

    /**
     * Check if the event has registration.
     *
     * @return bool
     */
    public function hasRegistration()
    {
        return ! empty($this->registration_link);
    }
}
