<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Kategori::create([
            'name' => 'Netflix Premium'
        ]);

        Kategori::create([
            'name' => 'Spotify Premium'
        ]);

        Kategori::create([
            'name' => 'Youtube Premium'
        ]);

        Kategori::create([
            'name' => 'Canva Pro'
        ]);

        Status::create([
            'name' => 'In order'
        ]);

        Status::create([
            'name' => 'Selesai'
        ]);

        User::create([
            'name' => 'Hafidz',
            'email' => 'hafidznak123@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
