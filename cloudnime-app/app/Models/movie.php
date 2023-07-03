<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'poster', 'genres_id', 'synopsis', 'release_date', 'countries', 'rating'];

    public function genre()
    {
        return $this->belongsTo(genre::class, 'genres_id');
    }
}