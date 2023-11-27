<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Tanar;
use Illuminate\Support\Facades\Log;
use App\Models\Tantargy;



class tanarController extends Controller
{
    //az a nev ami a route-ba van

         public function tanarListazas(){
            
            $tanarok = Tanar::inRandomOrder()->limit(6)->get();
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
            
        
    public function tanarProfil($tanar_id){
        $profil = Tanar::find($tanar_id);
        
        return view("tanarprofil",["profil" => $profil]);
    }


    
    public function tanarKereso(Request $req){
         $tanarok = Tanar::query();
         $telepulesek = Tanar::select("telepules")->groupBy("telepules")->get();
         $tantargyak = Tantargy::select("tantargy_id", "nev")->get();
         $tantargy = "";
         $cim = "";
         $telefon = "";
         $leiras = "";
         $oradij = "";

         
         if ($req->get('telepules') != ""){
             $telepules = $req->get('telepules');
             $tanarok->where('telepules', 'like',  $telepules );
         }
         if ($req->get('nev') != ""){
            $nev = $req->get('nev');
            $tanarok->whereHas('user_details', function ($query) use ($nev)  {$query->where('users.name', 'like', '%' . $nev . '%');
            });
        }
    
        
        if ($req->get('tantargy_id') != ""){
            $tantargy_id = $req->get('tantargy_id');
            $tanarok->whereHas('tanarok_tantargyai',function($query) use ($tantargy_id){
                $query->where('tantargyak.tantargy_id',$tantargy_id);
            });
        }
        
        $tanarok = $tanarok->paginate(6);

        return view("tanarKereso",["tanarok" => $tanarok, "telepulesek"=> $telepulesek, "tantargyak"=> $tantargyak]);
    }

}
