<?php

namespace Database\Seeders;

use App\Models\review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        review::create([
            'movies_id' => 1,
            'users_id' => 1,
            'date' => '1999-10-20',
            'description' => 'Gol D. Roger dikenal sebagai "Raja Bajak Laut", makhluk terkuat dan paling terkenal yang pernah mengarungi Grand Line. Penangkapan dan eksekusi Roger oleh Pemerintah Dunia membawa perubahan di seluruh dunia. Kata-kata terakhirnya sebelum kematiannya mengungkapkan keberadaan harta karun terbesar di dunia, One Piece.',
            'rating' => 8.7,
        ]);
        review::create([
            'movies_id' => 2,
            'users_id' => 1,
            'date' => '2004-10-05',
            'description' => 'Saat itulah ia bertemu dengan Soul Reaper bernama Rukia Kuchiki, yang terluka saat melindungi keluarga Ichigo dari penyerang. Untuk menyelamatkan keluarganya, Ichigo menerima tawaran Rukia untuk mengambil kekuatannya dan menjadi Soul Reaper sebagai hasilnya. ',
            'rating' => 8.0,
        ]);
        review::create([
            'movies_id' => 1,
            'users_id' => 1,
            'date' => '2007-02-15',
            'description' => 'Meskipun Naruto lebih tua dan kejadian menyeramkan tampak di cakrawala, dia telah berubah sedikit dalam kepribadian masih kasar dan kekanak-kanakan meskipun dia sekarang jauh lebih percaya diri dan memiliki tekad yang lebih besar untuk melindungi teman dan rumahnya.',
            'rating' => 8.3,
        ]);
        review::create([
            'movies_id' => 2,
            'users_id' => 1,
            'date' => '2019-04-06',
            'description' => 'Suatu hari, Tanjirou memutuskan untuk pergi ke desa setempat untuk menghasilkan sedikit uang dengan menjual arang. Dalam perjalanan pulang, malam tiba, memaksa Tanjirou berlindung di rumah seorang pria aneh, yang memperingatkannya tentang keberadaan setan pemakan daging yang mengintai di hutan pada malam hari.',
            'rating' => 8.5,
        ]);
        review::create([
            'movies_id' => 1,
            'users_id' => 2,
            'date' => '2015-10-05',
            'description' => 'Dia tampaknya tidak mengesankan Saitama memiliki hobi yang agak unik: menjadi pahlawan. Untuk mengejar impian masa kecilnya, Saitama berlatih tanpa henti selama tiga tahun, kehilangan semua rambutnya dalam prosesnya. Sekarang, Saitama sangat kuat, dia bisa mengalahkan musuh apapun hanya dengan satu pukulan. ',
            'rating' => 8.6,
        ]);
    }
}
