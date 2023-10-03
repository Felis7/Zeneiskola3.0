<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tantargy;

class tantargyakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tantargyak=[
            [
                'nev' => 'Zongora'
            ],
            [
                'nev' => 'Ének'
            ],
            [
                'nev' => 'Gitár'
            ],
            [
                'nev' => 'Dob'
            ],
            [
                'nev' => 'Basszusgitár'
            ],
            [
                'nev' => 'Hegedű'
            ],
            [
                'nev' => 'Fuvola'
            ]
            ];

            foreach($tantargyak as $egyTantargy){
                Tantargy::create($egyTantargy);
            }
        }
}
