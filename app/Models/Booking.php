<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory, UUID;
    protected $fillable =[
        'flight_id',
        'user_id',
        'date',
        'adult_ticket',
        'kid_ticket',
        'child_ticket',
        'additional_guide',
        'internet',
        'photograph',
        'total_price',
    ];
    protected $casts = [
           
        'date' => 'datetime:H:i', 
    ];

    public function getUser(){
        return $this->belongsTo(User::class);
    }

    public function getFlight(){
        return $this->belongsTo(Flight::class);
    }
}
