<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function userLista(Request $req){
        $users = User::query();
        $id = "";
        $name = "";
        $email = "";
        $admin_vertificated = "";


        


       $users = $users->paginate(8);

       return view("userLista",["users" => $users]);
   }
}
