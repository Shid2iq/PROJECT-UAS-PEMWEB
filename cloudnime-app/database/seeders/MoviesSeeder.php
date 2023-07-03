<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => '',
            'poster' => 'image.png',
            'genres_id' => 1,
            'synopsis' => '',
            'release_date' => '',
            'countries' => '',
            'rating' => '',
        ]);
    }
}
