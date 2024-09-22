<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'super admin',
                'email' => 'admin@gmail.com',
                'status' => 'admin',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'super dede',
                'email' => 'pengguna@gmail.com',
                'status' => 'pengguna',
                'password' => bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
