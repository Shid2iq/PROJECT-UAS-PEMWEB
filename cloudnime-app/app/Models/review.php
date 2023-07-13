<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $fillable = ['movies_id', 'users_id', 'date', 'description', 'rating'];

    public function movie(){
        return $this -> belongsTo(Movie::class, 'movies_id');
    }
    
    public function user(){
        return $this -> belongsTo(User::class, 'user_id');
    }
  
}
