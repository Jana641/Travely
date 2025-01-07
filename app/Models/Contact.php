<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory,UUID;

    protected $fillable = [
        'user_id', 
        'name',
        'email',
        'subject',
        'message',
      ];
    public function getUser(){
        return $this->hasOne(User::class);
     }
    
}
