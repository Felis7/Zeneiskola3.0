<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\regisztracioModel;
use App\Models\Tanar;

class regisztraciosController extends Controller
{
    public function reg(Request $req){
        $req->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=> "required|min:8|confirmed",
            "password_confirmation"=>"required"
            
        ],[
            "name.required"=>"Mező kitöltése kötelező!",
            "email.required"=>"Mező kitöltése kötelező!",
            "email.email"=>"Az e-mail formátuma nem megfelelő!",
            "password.required"=>"Mező kitöltése kötelező!",
            "password.min"=>"Minimum 8 karakter!",
            "password.confirmed"=> "A jelszó nem egyezik!",
            "password_confirmation.required"=>"A mező kitöltése kötelező!"
        ]);
        $token =Str::random(60);
        $kuldes = new regisztracioModel;
        $tanarok = new Tanar;
        $tanarok->save();

        $kuldes->name= $req->input("name");
        $kuldes->email= $req->input("email");
        $kuldes->password= Hash::make($req->input("password"));
        $kuldes->uid= $tanarok->tid;
        $kuldes->timestamps= now();
        $kuldes->remember_token= $token;
        $kuldes->save();
       // Mail::to($req->input("email"))->send(new SendEmail("http://localhost/Zeneiskola/public/register/confirm/".$token));

        return redirect()->route("home")->with("success","A regisztráció sikeresen megtörtént!");
    }
    public function confirm($token){
        $confirm = regisztracioModel::where("remember_token",$token)->first();
        if($confirm){
            if($confirm->email_verified_at != null){
                return redirect()->route("kezdolap")->with("error","Ez az e-mail már aktiválva van!");
            }
            $confirm->email_verified_at	= now();
            $confirm->save();
            return redirect()->route("kezdolap")->with("success","E-mail megerősítve");
        }
        else{
            return redirect()->route("kezdolap")->with("error","Hiba történt!");
        }
    }
}