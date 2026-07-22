<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'dining_format',
        'multiplier',
        'description',
    ];

    protected $casts = [
        'multiplier' => 'float',
    ];
}
