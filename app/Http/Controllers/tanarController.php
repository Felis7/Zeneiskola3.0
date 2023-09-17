<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Tanar;


class tanarController extends Controller
{
    public function tanarListazas(Request $req){
         $tanarok = tanar_profilok::query();
         $nev = "";
         $tantargy = "";
         $cim = "";
         $telefon = "";
         $email = "";
         $leiras = "";
         $oradij = "";

         if ($req->get('nev') != "") {
            $nev = $req->get('nev');
            $tanarok->where('nev', 'like', '%' . $req->get('nev') . '%');
            
        }
        $tanarok = $tanarok->get();


        return view("welcome",["tanarok" => $tanarok]);
    }
}
