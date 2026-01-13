<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Court extends Model
{
    protected $fillable = ['name', 'sport_type', 'price_per_hour'];

    public function bookings() 
    {
        return $this->hasMany(Booking::class);
    }
}
