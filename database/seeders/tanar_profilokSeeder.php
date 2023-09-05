<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class tanar_profilokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tanar_profilok')->insert([
            'nev' => 'Gipsz Jakab',
            'leiras' => '10 éve foglalkozok énekléssel',
            'irsz' => 1007,
            'telepules' => 'Budapest',
            'cim' => 'Petőfi Sándor utca 1',
            'telefonszam' => 06012345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-07-01',
        ]);
    }
}
