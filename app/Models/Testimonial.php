<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory,UUID;
    protected $fillable =[
        'feedback_message',
        'rate',
        'image',
        'user_name'
    ];
}
