<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        


        \App\Models\User::factory(3)->create();

        \App\Models\Category::create([
            'nama' => 'Elektronik',
            'slug' => 'elektronik'
        ]);

        \App\Models\Category::create([
            'nama' => 'Kendaraan',
            'slug' => 'kendaraan'
        ]);

        \App\Models\Category::create([
            'nama' => 'Aksesoris',
            'slug' => 'aksesoris'
        ]);

        \App\Models\Category::create([
            'nama' => 'Lainnya',
            'slug' => 'lainnya'
        ]);

        \App\Models\Barang::factory(25)->create();

        //admin
        \App\Models\Admin::create([
            "email" => "admin123@gmail.com",
            "password" => bcrypt(123456)
        ]);

        \App\Models\History::factory(25)->create();

    }
}
