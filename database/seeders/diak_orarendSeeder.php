<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tantargy;

class diak_orarendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tantargyak = [[
            'nev' => 'Ének'
        ],
        [
            'nev' => 'Zongora'
        ],
        [
            'nev' => 'Gitár'
        ],
        [
            'nev' => 'Cimbalom'
        ],
        [
            'nev' => 'Kalimba'
        ],
        [
            'nev' => 'Dob'
        ],
        [
            'nev' => 'Fuvola'
        ]];
        foreach($tantargyak as $egyTantargy){
            Szin::create($egyTantargy);
        }

    }
}
