<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Tanar;
use Illuminate\Support\Facades\Log;



class tanarController extends Controller
{
    //az a nev ami a route-ba van

         public function tanarListazas(){
            $tanarok = Tanar::all();
            return view('welcome',['tanarok' => $tanarok]);
        }
    
    public function upload(Request $req){
         $req->validate(
            [
                'fajl' => "required|mimes:png,jpg|max:100"
            ],
            [
                'fajl.required' => "Kötelező a fájlt megadni",
                'fajl.mimes' => 'Csak png,jpg típus lehet',
                'fajl.max' => 'Max 100kb lehet'
            ]
            );
            $kep = data('YmdHis').".".$req->fajl->extension();
            $req->fajl->storeAs("public/kepek",$kep);

            return back()->with('success','Kép feltöltése sikeres!');
    }
            
        
    


    
    public function tanarKereso(Request $req){
         $tanarok = Tanar::query();
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

        return view("tanarKereso",["tanarok" => $tanarok]);
    }

}
