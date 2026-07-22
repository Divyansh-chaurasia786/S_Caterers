<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'price_per_head',
        'image_path',
        'tag',
        'features',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'price_per_head' => 'float',
        'is_active' => 'boolean',
    ];

    /**
     * Scope a query to only include active services.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to filter by category.
     */
    public function scopeByCategory($query, $category)
    {
        if (empty($category) || $category === 'all') {
            return $query;
        }
        return $query->where('category', $category);
    }
}
