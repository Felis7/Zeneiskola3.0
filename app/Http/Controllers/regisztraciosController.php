<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regisztraciosController extends Controller
{
    public function reg(Request $req){
        $req->validate([
            "nevInput"=>"required|max:50|min:2|string",
            "kepInput"=>"required|image|mines:png,jpg,jpeg|max:4096",
            "leirasInput"=>"required|string|min:10",
            "irszamInput"=>"required|integer|max:4|min:4",
            "telepulesInput"=>"required|string|max:20",
            "cimInput"=>"required|string|max:40",
            "telszamInput"=>"required",
            "emailInput"=>"required|email",
            "oradijInput"=>"required|integer"
        ],[]);
    }
}
