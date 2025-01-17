<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*DB::table('users')->insert([
            ''
        ])*/
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            userSeeder::class,
         ]);
         $this->call([
             tanar_profilokSeeder::class,
         ]);
         $this->call([
            tantargyakSeeder::class,
         ]);
         $this->call([
            tanarok_tantargyaiSeeder::class,
         ]);
         $this->call([
            PiacSeeder::class,
         ]);
         
    }
}
