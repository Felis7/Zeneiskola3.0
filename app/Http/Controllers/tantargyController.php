<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tantargyController extends Controller
{
    public function store(Request $req){
        
        $minimumKarakter = 2;
        $req->validate(
     [
        "tantargy_nev" => "required|alpha|lowercase|unique:tantargy,tantargy_nev|min:".$minimumKarakter."|max:30"
     ],
     [
        "tantargy_nev.required" => "A mező kitöltése kötelező!",
        "tantargy_nev.unique" => "Ez a tantárgy már fel van véve!",
        "tantargy_nev.min" => "Minimum ".$minimumKarakter." karaktert adj meg!",
        "tantargy_nev.max" => "Maximum 30 karaktert adhatsz meg!",
        "tantargy_nev.alpha" => "Csak betűket lehet beírni",
        "tantargy_nev.lowercase" => "Csak kisbetűket lehet beírni!"
     ]
  );
  #adatbázisba rögzítés modellt használva
  Tipus::create([
     "nev" => $req->get("tantargy_nev")
  ]);

  #visszairányítjuk a felhasználót, egy kész sessionsel
  return back()->with("success","A tantárgy rögzítése sikeres!");
 }
}
