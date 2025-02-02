<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'user_id',
        'flight_id',
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

    public function flight(){
        return $this->belongsTo(Flight::class);
    }
}
