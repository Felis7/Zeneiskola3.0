<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\piacModel;
use App\Models\telepulesModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class piacController extends Controller
{
    public function adatBetolto(){
        $adat = piacModel::all();
        $min = DB::table("hangszerpiac")->min("ar");
        $max =  DB::table("hangszerpiac")->max("ar");
        $telepules = telepulesModel::all();
        if(!$adat){

            return redirect()->route("hangszerpiac")->with("fail", "Valami hiba történt!");

        }
        
        return view("hangszerpiac", ["adat"=>$adat, "telepules"=>$telepules,
        "min"=>$min, "max"=>$max]);
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

        $telepulesNeve=new telepulesModel();
        if ($req->file("kepInput")){
            $file=$req->file("kepInput");
            $kepNeve = Str::random(10);
            $file->move(public_path("img/hangszer"), $kepNeve);
        }
        $hangszerek = new piacModel();
        $hangszerek ->nev = $req->input("hangszernevInput");
        $hangszerek ->ar = $req->input("arInput");
        $hangszerek ->hely = $req->input("helyInput");
        if(!telepulesModel::find($req->input("helyInput"))){
            $telepulesNeve->telepules=$req->input("helyInput");
            $telepulesNeve ->save();
        }
        

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
    public function hangszerKereses(Request $req){
        $telepulesNev = $req->input("telepulesInput");
        $hangszerNev = $req->input('nevInput');
        switch($req->input("rendezes")){
            case "0":
                $hangszerAdat = piacModel::where("hely",$telepulesNev)
            ->where("ar", "<=", $req->input("arInput"))
            ->where("nev", "like", "%$hangszerNev%")
            ->get();
            break;
            case "1":
                $hangszerAdat = piacModel::where("hely",$telepulesNev)
            ->where("ar", "<=", $req->input("arInput"))
            ->where("nev", "like", "%$hangszerNev%")
            ->orderBy("nev")
            ->get();
            break;
            case "2":
                $hangszerAdat = piacModel::where("hely",$telepulesNev)
            ->where("ar", "<=", $req->input("arInput"))
            ->where("nev", "like", "%$hangszerNev%")
            ->orderBy("ar")
            ->get();
            break;
            case "3":
            $hangszerAdat = piacModel::where("hely",$telepulesNev)
            ->where("ar", "<=", $req->input("arInput"))
            ->where("nev", "like", "%$hangszerNev%")
            ->orderByDesc("ar")
            ->get();
            break;
            default:return redirect("kezdolap");
        }
        return view("hangszerpiac", ["adat"=>$hangszerAdat,"min"=>0,"max"=>$req->input("arInput"), "telepules"=>telepulesModel::all()]);


    }
}
