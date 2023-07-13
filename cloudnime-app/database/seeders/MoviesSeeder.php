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
            'title' => 'One Piece',
            'poster' => 'image.png',
            'genre_id' =>  1,
            'synopsis' => 'Masukkan Monkey D. Luffy, seorang bocah lelaki berusia 17 tahun yang menentang definisi standar Anda tentang bajak laut',
            'release_date' => '1999-10-20',
            'countries_id' => 1,
            'rating' => 8.7,
        ]);
        Movie::create([
            'title' => 'Bleach',
            'poster' => 'image.png',
            'genre_id' => 1,
            'synopsis' => 'Ichigo Kurosaki adalah siswa sekolah menengah biasa sampai keluarganya diserang oleh Hollow, roh korup yang berusaha melahap jiwa manusia.',
            'release_date' => '2004-10-5',
            'countries_id' => 1,
            'rating' => 8.0,
        ]);
        Movie::create([
            'title' => 'Suzume',
            'poster' => 'iamge.png',
            'genre_id' => 1,
            'synopsis' => 'Dalam perjalanannya ke sekolah suatu hari, Suzume Iwato menemukan Souta Munakata, seorang pemuda yang mencari daerah terlantar.',
            'release_date' => '2022-11-11',
            'countries_id' => 1,
            'rating' => 8.4,
        ]);
        Movie::create([
            'title' => 'Naruto',
            'poster' => 'image.png',
            'genre_id' => 1,
            'synopsis' => 'Sudah dua setengah tahun sejak Naruto Uzumaki meninggalkan Konohagakure, Desa Daun Tersembunyi, untuk latihan intensif mengikuti peristiwa yang memicu keinginannya untuk menjadi lebih kuat.',
            'release_date' => '2007-2-15',
            'countries_id' => 1,
            'rating' => 8.3,
        ]);
        Movie::create([
            'title' => 'Kimetsu No Yaiba',
            'poster' => 'image.png',
            'genre_id' => 4,
            'synopsis' => 'Sejak kematian ayahnya, beban menafkahi keluarga berada di pundak Tanjirou Kamado. Meski hidup melarat di gunung terpencil, keluarga Kamado bisa menikmati kehidupan yang relatif damai dan bahagia',
            'release_date' => '2009-4-6',
            'countries_id' => 1,
            'rating' => 8.5,
        ]);
        Movie::create([
            'title' => 'Chainsaw-Man',
            'poster' => 'image.png',
            'genre_id' => 3,
            'synopsis' => 'Denji dirampok dari kehidupan remajanya yang normal, tidak memiliki apa-apa selain hutang ayahnya yang sangat besar. Teman satu-satunya adalah hewan peliharaannya, Pochita, iblis gergaji mesin',
            'release_date' => '2022-10-12',
            'countries_id' => 1,
            'rating' => 8.5,
        ]);
        Movie::create([
            'title' => 'Black Clover',
            'poster' => 'image.png',
            'genre_id' =>5,
            'synopsis' => 'Asta dan Yuno ditinggalkan di gereja yang sama pada hari yang sama. Dibesarkan bersama sebagai anak-anak, mereka mengenal "Raja Penyihir"gelar yang diberikan kepada penyihir terkuat di kerajaan.',
            'release_date' => '2017-10-3',
            'countries_id' => 1,
            'rating' => 8.2,
        ]);
        Movie::create([
            'title' => 'One Punch-Man',
            'poster' => 'image.png',
            'genre_id' => 5,
            'synopsis' => 'Suatu hari, Saitama menarik perhatian Genos cyborg berusia 19 tahun, yang menyaksikan kekuatannya dan ingin menjadi murid Saitama.',
            'release_date' => '2015-10-5',
            'countries_id' => 2,
            'rating' => 8.5,
        ]);
        Movie::create([
            'title' => 'Violet Evergarden',
            'poster' => 'image.png',
            'genre_id' => 5,
            'synopsis' => 'Perang Besar akhirnya berakhir setelah konflik selama empat tahun; terpecah menjadi dua, benua Telesis perlahan mulai berkembang sekali lagi',
            'release_date' => '2018-1-11',
            'countries_id' => 1,
            'rating' => 8.6,
        ]);
    }
}
