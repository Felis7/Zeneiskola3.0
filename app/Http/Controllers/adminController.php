<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function tanarKereso(Request $req){
        $tanarok = Tanar::query();
        $telepulesek = Tanar::select("telepules")->groupBy("telepules")->get();
        $tantargyak = Tantargy::select("tantargy_id", "nev")->get();
        $nev = "";
        $tantargy = "";
        $cim = "";
        $telefon = "";
        $email = "";
        $leiras = "";
        $oradij = "";

        if ($req->get('nev') != ""){
           $nev = $req->get('nev');
           $tanarok->where('nev', 'like', '%' . $nev . '%');
       }
       if ($req->get('nev') != ""){
        $nev = $req->get('nev');
        $tanarok->where('nev', 'like', '%' . $nev . '%');
    }

       $tanarok = $tanarok->paginate(6);

       return view("tanarKereso",["tanarok" => $tanarok, "telepulesek"=> $telepulesek, "tantargyak"=> $tantargyak]);
   }
}
