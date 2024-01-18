<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tanar;

class profilController extends Controller
{
    public function profilBetoltes(){
        $user = Auth::user();
        $tanar = Tanar::find(1);
        
        if($user){
            
            
                return view("profil",["user"=>$user->email, "tanar"=>$tanar]);       
        }
            return view("welcome");
    }
    public function adatMentes(Request $request){
        $request->validate([
            "nevInput"=>["required"],
            "leirasInput"=>["required","min:20"],
            "irszamInput"=>["required", "numeric", "min:1000", "max:9999",],
            "telepulesInput"=>["required"],
            "cimInput"=>["required"],
            "telszamInput"=>["required", "numeric"],
            "oradijInput"=>["required", "numeric"]            
        ],[
            "nevInput.required"=>"A mező kitöltése kötelező!",
            "leirasInput.required"=>"A mező kitöltése kötelező!",
            "leirasInput.min"=> "Minimum 20 karakter!",
            "irszamInput.required"=>"A mező kitöltése kötelező!",
            "irszamInput.numeric"=>"Csak szám lehet!",
            "irszamInput.min"=>"Minimum 1000 lehet!",
            "irszamInput.max"=>"Maximum 9999 lehet!",
            "telepulesInput.required"=>"A mező kitöltése kötelező!",
            "cimInput.required"=>"A mező kitöltése kötelező!",
            "telszamInput"=> "A mező kitöltése kötelező!",
            "telszamInput.numeric"=>"Csak szám lehet!",
            "oradijInput.required"=>"A mező kitöltése kötelező!",
            "oradijInput.numeric"=>"Csak szám lehet!",
        ]);
        $tanar = Tanar:: find(Auth::user()->tid);
        $tanar->nev= $request->input("nevInput");
        $tanar->leiras= $request->input("leirasInput");
        $tanar->irsz= $request->input("irszamInput");
        $tanar->telepules= $request->input("telepulesInput");
        $tanar->cim= $request->input("cimInput");
        $tanar->telefonszam= $request->input("telszamInput");
        $tanar->oradij= $request->input("oradijInput");

        $tanar->save();
        return redirect("profil");
    }   
}
