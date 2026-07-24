<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = ['title', 'category', 'path', 'is_local', 'media_type'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getIsVideoAttribute()
    {
        if ($this->media_type === 'video') {
            return true;
        }
        $ext = strtolower(pathinfo($this->path, PATHINFO_EXTENSION));
        return in_array($ext, ['mp4', 'mov', 'webm', 'ogg', 'mkv', 'avi']);
    }
}
