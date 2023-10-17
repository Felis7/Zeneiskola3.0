<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tanar;

class tanar_profilokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanarok= [
            [
            'nev' => 'Gipsz Jakab',
            'leiras' => '10 éve foglalkozok énekléssel',
            'irsz' => 1007,
            'telepules' => 'Cegléd',
            'cim' => 'Petőfi Sándor utca 1',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-07-01'
        ],
        [
            'nev' => 'Kovács Béla',
            'leiras' => '10 éve foglalkozok zongorázással',
            'irsz' => 1007,
            'telepules' => 'Budapest',
            'cim' => 'Petőfi Sándor utca 2',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-05-01'
        ],
        [
            'nev' => 'Minta Panna',
            'leiras' => '10 éve foglalkozok gitározással',
            'irsz' => 1007,
            'telepules' => 'Taksony',
            'cim' => 'Petőfi Sándor utca 3',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-05-11'
        ],
        [
            'nev' => 'Kovács Antal',
            'leiras' => '10 éve foglalkozok cimbalomozással',
            'irsz' => 1007,
            'telepules' => 'Dunakeszi',
            'cim' => 'Petőfi Sándor utca 5',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-05-21'
        ],[
            'nev' => 'Kovács János',
            'leiras' => '10 éve foglalkozok kalimbázással',
            'irsz' => 1007,
            'telepules' => 'Budaörs',
            'cim' => 'Petőfi Sándor utca 55',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-05-20'
        ],
        [
            'nev' => 'Kovács Béla',
            'leiras' => '10 éve foglalkozok zongorázással',
            'irsz' => 1007,
            'telepules' => 'Budapest',
            'cim' => 'Petőfi Sándor utca 2',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-05-01'
        ],
        [
            'nev' => 'Teszt Tamás',
            'leiras' => '10 éve foglalkozok dobolással',
            'irsz' => 1007,
            'telepules' => 'Budapest',
            'cim' => 'Petőfi Sándor utca 62',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-05-25'
        ],[
            'nev' => 'Teszt Valaki',
            'leiras' => '10 éve foglalkozok fuvolával',
            'irsz' => 1007,
            'telepules' => 'Érd',
            'cim' => 'Petőfi Sándor utca 255',
            'telefonszam' => 112345678,
            'email' => 'teszt@teszt.com',
            'oradij' => 5000,
            'elofizetes_lejarata' => '2024-07-21'
        ]

            ];
       
            foreach($tanarok as $egyTanar){
                Tanar::create($egyTanar);
            }
        
        
        
    }
}
