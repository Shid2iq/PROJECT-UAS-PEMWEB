<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'poster', 'genre_id', 'synopsis', 'release_date', 'countries_id', 'rating'];

    public function getAllMovies(){
        return $this -> movies; 
        }

    public function genre()
    {
        return $this -> belongsTo(genre::class, 'genre_id');
    }

    public function countries(){
        return $this -> belongsTo(countries::class, 'countries_id');
    }
}
