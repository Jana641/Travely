<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Flight extends Model
{
    use HasFactory,UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'short_description',
        'guests',
        'price',
        'duration',
        'rate',
        'long_description',
        'highlights',
        'image',
        'departure_date',
        'return_date',
        'departure_time',
        'media_gallery',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'highlights' => 'array',       
        'media_gallery' => 'array',   
        'departure_time' => 'datetime:H:i', 
        'departure_date' => 'date',        
        'return_date' => 'date',            
    ];

    public function getBooks(){
        return $this->hasMany(Booking::class);
    }
}
