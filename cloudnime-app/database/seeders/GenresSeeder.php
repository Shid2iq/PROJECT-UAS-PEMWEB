<?php

namespace Database\Seeders;

use App\Models\genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        genre::create([
            'name' => 'Action',
            'description' => ' The action genre in anime is a genre that emphasizes intense action and combat.
            Usually, stories in action anime will feature protagonists who have extraordinary skills or powers and try to deal with various conflicts and challenges by fighting.',
        ]);

        genre::create([
            'name' => 'Adventure',
            'description' => ' The adventure genre in anime presents stories that emphasize adventure and exploration. 
            Usually, the protagonist and his group will travel across fictional worlds or fantastical locations in search of treasures, 
            discover hidden places,or unravel the mysteries that exist.',
        ]);

        genre::create([
            'name' => 'Fantasy',
            'description' => ' The fantasy genre in anime presents stories that take place in the world or reality that involve elements of magic, mythology, or miracles.
            Fantasy anime often offers a different world with different rules and laws from the real world.',
        ]);

        genre::create([
            'name' => 'Comedy',
            'description' => ' The comedy genre in anime presents stories that aim to entertain the audience with humor and funny situations. 
            Comedy anime often employ various types of comedy, including slapstick humor, parodies, silliness, and humorous dialogue.',
        ]);
        genre::create([
            'name' => 'Romance',
            'description' => ' The romance genre in anime presents stories that focus on the romantic relationships between the main characters. 
            Anime romance often explores aspects such as love,friendship, emotional growth, and conflicts that occur in romantic relationships.',
        ]);

    }
}
