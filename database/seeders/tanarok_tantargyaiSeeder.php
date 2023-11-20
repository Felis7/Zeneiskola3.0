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
            'tid' => 1,
            'tantargy_id' => 2
        ],
        [
            'tid' => 2,
            'tantargy_id' => 1
        ],
        [
            'tid' => 3,
            'tantargy_id' => 3
        ],
        [
            'tid' => 4,
            'tantargy_id' => 6
        ],
        [
            'tid' => 5,
            'tantargy_id' => 5
        ],
        [
            'tid' => 6,
            'tantargy_id' => 1
        ],
        [
            'tid' => 7,
            'tantargy_id' => 4
        ],
        [
            'tid' => 8,
            'tantargy_id' => 7
        ],
        [
            'tid' => 5,
            'tantargy_id' => 3
        ],
        [
            'tid' => 3,
            'tantargy_id' => 1
        ]
        ];

        foreach($tan_tantargyak as $egytan_tantargy){
            tanarok_tantargyai::create($egytan_tantargy);
        }
    }
}
