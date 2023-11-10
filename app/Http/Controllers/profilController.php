<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tanar;

class profilController extends Controller
{
    public function profilBetoltes(){
        $user = Auth::user();
        if($user->tid != null){
            $tanar = Tanar::find($user->tid);
            if($tanar){
                return view("profil",["tanar"=>$tanar,"user"=>$user->email]);
            }
            return view("welcome");
        }
            return view("welcome");
    }
    public function adatMentes(Request $request){
        $request->validate([
            "nevInput"=>["required"],
            //folytasd a beviteli mezők alapján
        ],[
            "nevInput.required"=>"A mező kitöltése kötelező",
        ]);
        $user = Tanar:: find(Auth::user()->tid);
        $user->nev= $request->input("nevInput");
        //folytasd a tábla alapján
        $user->save();
        return redirect("profil");
    }   
}
