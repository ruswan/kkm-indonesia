<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    use SoftDeletes;

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
}
