<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\UserJogkor;

class UserJogkorController extends Controller
{
    public function index(){
       $jogKor = UserJogkor::all();
        
    }
}
