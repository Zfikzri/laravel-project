<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grade;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Student::factory(30)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Grade::create([
            "Nama" => "10 PPLG 1"
        ]);

        Grade::create([
            "Nama" => "10 PPLG 2"
        ]);
        
        Grade::create([
            "Nama" => "11 PPLG 1"
        ]);

        Grade::create([
            "Nama" => "11 PPLG 1"
        ]);
        
    }

   
}
