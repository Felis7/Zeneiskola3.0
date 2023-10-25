<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\regisztracioModel;

class regisztraciosController extends Controller
{
    public function reg(Request $req){
        $req->validate([
            "nevInput"=>"required|max:50|min:2",
            "kepInput"=>"image|mines:png,jpg,jpeg|max:4096",
            "leirasInput"=>"required|string|min:10",
            "irszamInput"=>"required|integer|max:4|min:4",
            "telepulesInput"=>"required|string|max:20",
            "cimInput"=>"required|string|max:40",
            "telszamInput"=>"required",
            "emailInput"=>"required|email",
            "oradijInput"=>"required|integer"
        ],[
            "nevInput.required"=>"Mező kitöltése kötelező!",
            "nevInput.max"=>"Maximum 50 karakter!",
            "nevInput.min"=>"Minimum 2 karakter!",
            "kepInput.mines"=>"A kép formátuma nem megfelelő!",
            "kepInput.max"=>"A kép mérete túl nagy! Maximum képméret 4MB",
            "leirasInput.required"=>"Mező kitöltése kötelező!",
            "leirasInput.min"=>"Minimum 10 karakter!",
            "irszamInput.required"=>"Mező kitöltése kötelező!",
            "irszamInput.max"=>"Max 4 karakter!",
            "irszamInput.min"=>"Minimum 4 karakter!",
            "telepulesInput.required"=>"Mező kitöltése kötelező!",
            "telepulesInput.max"=>"Maximum 20 karakter!",
            "cimInput.required"=>"Mező kitöltése kötelező!",
            "cimInput.max"=>"Maximum 40 karakter!",
            "telszamInput.required"=>"Mező kitöltése 
            kötelező!",
            "emailInput.required"=>"Mező kitöltése kötelező!",
            "emailInput.email"=>"Az e-mail formátuma nem megfelelő",
            "oradijInput.required"=>"Mező kitöltése kötelező!"
        ]);

        $kuldes = new regisztracioModel;

        $kuldes->nev= $req->input("nevInput");
        $kuldes->kep= $req->input("kepInput");
        $kuldes->leiras= $req->input("leirasInput");
        $kuldes->irszam= $req->input("irszamInput");
        $kuldes->telepules= $req->input("telepulesInput");
        $kuldes->cim= $req->input("cimInput");
        $kuldes->telefonszam= $req->input("telefonszamInput");
        $kuldes->email= $req->input("emailInput");
        $kuldes->oradij= $req->input("oradijInput");
        $kuldes->save();
        return redirect()->route("home")->with("success","A regisztráció sikeresen megtörtént!");
    }
}
