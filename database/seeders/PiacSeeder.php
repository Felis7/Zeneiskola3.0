<?php

namespace Database\Seeders;

use App\Http\Controllers\piacController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\piacModel;

class PiacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    

        piacModel::create([
            'nev' => 'Fender Stratocaster',
            'ar' => '400000',
            'hely' => 'Budapest',
            'kep' => 'eGitar.jpg',
            'leiras' => 'Eladó egy Fender Stratocaster gitár. Kiváló állapotban van, 1 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
            'telefonszam' => '06301234567',
            'email' => 'jnjudit79@gmail.com',
            'uid' => '1']);

            PiacModel::create([
                'nev' => 'Gibson Les Paul',
                'ar' => '500000',
                'hely' => 'Szeged',
                'kep' => 'akusztikusGitar.jpg',
                'leiras' => 'Eladó egy Gibson Les Paul gitár. Kiváló állapotban van, 2 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06309876543',
                'email' => 'peter80@gmail.com',
                'uid' => '2']);
            

            PiacModel::create([
                'nev' => 'Yamaha Grand Piano',
                'ar' => '800000',
                'hely' => 'Pécs',
                'kep' => 'versenyZongora.jpg',
                'leiras' => 'Eladó egy Yamaha Grand Piano zongora. Kiváló állapotban van, 3 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06302165478',
                'email' => 'zongora@gmail.com',
                'uid' => '3']);
            

            PiacModel::create([
                'nev' => 'Steinway Pianino',
                'ar' => '600000',
                'hely' => 'Győr',
                'kep' => 'pianino.jpg',
                'leiras' => 'Eladó egy Steinway Pianino. Kiváló állapotban van, 4 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06304567891',
                'email' => 'pianino@gmail.com',
                'uid' => '4']);
            

            PiacModel::create([
                'nev' => 'Bach Stradivarius Trumpet',
                'ar' => '300000',
                'hely' => 'Miskolc',
                'kep' => 'vTrombita.jpg',
                'leiras' => 'Eladó egy Bach Stradivarius trombita. Kiváló állapotban van, 2 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06309876543',
                'email' => 'trombita@gmail.com',
                'uid' => '2']);
            

            PiacModel::create([
                'nev' => 'Jupiter Pocket Trumpet',
                'ar' => '200000',
                'hely' => 'Kecskemét',
                'kep' => 'zsebTrombita.jpg',
                'leiras' => 'Eladó egy Jupiter Pocket Trumpet. Kiváló állapotban van, 1 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06301234567',
                'email' => 'zsebtrombita@gmail.com',
                'uid' => '1']);
            

            PiacModel::create([
                'nev' => 'alt furulya',
                'ar' => '10000',
                'hely' => 'Kecskemét',
                'kep' => 'altFurulya.jpg',
                'leiras' => 'Eladó egy kiváló állapotban levő alt furulya, 1 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06301234567',
                'email' => 'altfurulya@gmail.com',
                'uid' => '1']);
            


            PiacModel::create([
                'nev' => 'szoprán furulya',
                'ar' => '15000',
                'hely' => 'Kecskemét',
                'kep' => 'szopranFurulya.jpg',
                'leiras' => 'Eladó egy kiváló állapotban levő szopran furulya, 1 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06301234567',
                'email' => 'szopranfurulya@gmail.com',
                'uid' => '1']);
            

            PiacModel::create([
                'nev' => 'dob',
                'ar' => '20000',
                'hely' => 'Kecskemét',
                'kep' => 'nagyDob.jpg',
                'leiras' => 'Eladó egy kiváló állapotban levő tenor furulya, 1 éves, de nem használtam sokat. A hangja kiváló, a külseje is nagyon szép.',
                'telefonszam' => '06301234567',
                'email' => 'nagydob@gmail.com',
                'uid' => '1'
            ]);

    }
}
