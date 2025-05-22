<?php

// php artisan make:seeder DummyUsersSeeder

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
        //Membuat Variabel Dummy Users

        $userData = [
            [
                'name' => 'Mas Operator',
                'email' => 'operator@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'operator',
            ],
            [
                'name' => 'Mas Keuangan',
                'email' => 'keuangan@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'keuangan',
            ],
            [
                'name' => 'Mas Marketing',
                'email' => 'marketing@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'marketing',
            ],
        ];

        // Masukkan Dummy Users ke dalam Database menggunakan foreach untuk memasukkan data ke dalam database
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
