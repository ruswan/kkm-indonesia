<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallery_id',
        'title',
        'description',
        'image_path',
        'sort',
    ];

    protected $casts = [
        'sort' => 'integer',
    ];

    public function gallery(): BelongsTo
    {
        return $this->belongsTo(Gallery::class);
    }

    public function getImageUrlAttribute(): string
    {
        return asset('storage/'.$this->image_path);
    }
}
