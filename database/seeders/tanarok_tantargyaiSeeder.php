<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\tanarok_tantargyai;

class tanarok_tantargyaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tan_tantargyak=[
        [
            'tanar_id' => 1,
            'tantargy_id' => 2
        ],
        [
            'tanar_id' => 2,
            'tantargy_id' => 1
        ],
        [
            'tanar_id' => 3,
            'tantargy_id' => 3
        ],
        [
            'tanar_id' => 4,
            'tantargy_id' => 6
        ],
        [
            'tanar_id' => 5,
            'tantargy_id' => 5
        ],
        [
            'tanar_id' => 6,
            'tantargy_id' => 1
        ],
        [
            'tanar_id' => 7,
            'tantargy_id' => 4
        ],
        [
            'tanar_id' => 8,
            'tantargy_id' => 7
        ]
        ];

        foreach($tan_tantargyak as $egytan_tantargy){
            tanarok_tantargyai::create($egytan_tantargy);
        }
    }
}
