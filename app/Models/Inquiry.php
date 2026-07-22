<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'selected_service',
        'client_name',
        'client_email',
        'event_date',
        'guest_count',
        'estimated_total',
        'notes',
        'status',
    ];

    protected $casts = [
        'guest_count' => 'integer',
        'estimated_total' => 'float',
        'event_date' => 'date',
    ];

    /**
     * Scope for pending inquiries.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
}
