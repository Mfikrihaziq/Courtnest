<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id', 
        'court_id', 
        'booking_date', 
        'start_time', 
        'duration', 
        'total_price', 
        'status'
    ];

    protected $casts = [
        'booking_date' => 'date',
        'duration' => 'integer',
        'total_price' => 'float',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function court() 
    {
        return $this->belongsTo(Court::class);
    }
}