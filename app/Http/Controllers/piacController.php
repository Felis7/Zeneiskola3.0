<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\piacModel;
use App\Models\telepulesModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class piacController extends Controller
{
    public function adatBetolto(){
        $adat = piacModel::all();
        $telepules = telepulesModel::all();
        if(!$adat){
            return redirect()->route("hangszerpiac")->with("fail", "Valami hiba történt!");

        }
        return view("hangszerpiac", ["adat"=>$adat, "telepules"=>$telepules]);
    }

    public function hangszerfeltolto(Request $req){
        $req->validate([
            "hangszernevInput"=>"required",
            "helyInput"=>"required",
            "arInput"=>"required|integer",
            "telszamInput"=>"required",
            "emailInput"=>"required",
            "kepInput"=>"required"          
            
        ],[
            "hangszernevInput.required"=>"A mező kitöltése kötelező!",
            "helyInput.required"=>"A mező kitöltése kötelező!",
            "arInput.required"=>"A mező kitöltése kötelező!",
            "arInput.integer"=>"Csak szám lehet!",
            "telszamInput.required"=>"A mező kitöltése kötelező!",
            "emailInput.required"=>"A mező kitöltése kötelező!",
            "kepInput.required"=>"Kép kitöltése kötelező!"
        ]);

        $kepNeve = Str::random(10);
        $req->file("kepInput")->storeAs("public/img", $kepNeve);
        $hangszerek = new piacModel();
        $hangszerek ->nev = $req->input("hangszernevInput");
        $hangszerek ->ar = $req->input("arInput");
        $hangszerek ->hely = $req->input("helyInput");
        $hangszerek ->kep = $kepNeve;
        $hangszerek ->leiras = $req->input("leirasInput");
        $hangszerek ->telefonszam = $req->input("telszamInput");
        $hangszerek ->email = $req->input("emailInput");
        $hangszerek ->uid = Auth::id();


        $hangszerek->save();
        return redirect ("hangszerpiac");
    }
    public function hangszerInfBeker($id){
        $hangszer = piacModel::find($id);
        if(!$hangszer){
            return redirect ("hanszerpiac")->with("error", "Valami hiba történt!");
        }return view("hangszerekInformacio", ["adat"=>$hangszer]);
    }
}
