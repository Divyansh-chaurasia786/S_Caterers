<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = ['title', 'category', 'path', 'is_local', 'is_video', 'media_type', 'cloudinary_id'];

    protected $casts = [
        'is_local'   => 'boolean',
        'is_video'   => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getIsVideoAttribute($value)
    {
        // If explicitly set in DB, use that
        if ($value !== null) {
            return (bool) $value;
        }
        // Fallback: detect from media_type or path extension
        if ($this->media_type === 'video') {
            return true;
        }
        $ext = strtolower(pathinfo($this->path, PATHINFO_EXTENSION));
        return in_array($ext, ['mp4', 'mov', 'webm', 'ogg', 'mkv', 'avi']);
    }

    public function isCloudinary(): bool
    {
        return !empty($this->cloudinary_id) || str_contains($this->path ?? '', 'cloudinary.com');
    }

    /**
     * Get display URL with Cloudinary auto-compression params injected.
     * Images: q_auto, f_auto (WebP/AVIF), max 1200px wide
     * Videos: q_auto, vc_auto (best codec), f_auto
     */
    public function getOptimizedUrl(): string
    {
        $path = $this->path ?? '';

        if (!$this->isCloudinary() || empty($path)) {
            return $path;
        }

        // Skip if transformations already injected
        if (str_contains($path, 'q_auto')) {
            return $path;
        }

        // For videos: return path as-is (raw mp4 URL — no format transform that could break playback)
        if ($this->is_video) {
            return $path;
        }

        return preg_replace('#(/upload/)#', '$1q_auto,f_auto,w_1200,c_limit/', $path, 1);
    }

    /**
     * Get thumbnail URL (small preview) for admin grid.
     * Images: 400px wide, auto quality/format
     * Videos: poster frame at 400px
     */
    public function getThumbnailUrl(): string
    {
        $path = $this->path ?? '';

        if (!$this->isCloudinary() || empty($path)) {
            return $path;
        }

        // Strip any existing transformations first
        $clean = preg_replace('#(/upload/)([a-z_,/]+/)#', '$1', $path);

        if ($this->is_video) {
            // Video thumbnail: extract first frame as image
            $clean = str_replace('/video/upload/', '/video/upload/q_auto,w_400,so_0/', $clean);
            // Change extension to jpg for thumbnail
            $clean = preg_replace('/\.[a-z0-9]+$/i', '.jpg', $clean);
            return $clean;
        }

        return preg_replace('#(/upload/)#', '$1q_auto,f_auto,w_400,c_limit/', $clean, 1);
    }
}
