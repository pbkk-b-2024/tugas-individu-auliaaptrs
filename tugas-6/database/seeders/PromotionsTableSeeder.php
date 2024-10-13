<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionsTableSeeder extends Seeder
{
    public function run()
    {
        Promotion::create([
            'caption' => 'Diskon 50% untuk tiket film!',
            'photo' => 'img/logo.jpg', // Ganti dengan nama file yang sesuai
        ]);

        Promotion::create([
            'caption' => 'Tiket Gratis untuk Member!',
            'photo' => 'img/logo.jpg', // Ganti dengan nama file yang sesuai
        ]);
    }
}
