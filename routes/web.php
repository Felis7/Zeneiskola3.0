<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tanarController;
use App\Http\Controllers\regisztraciosController;

//Auth::routes();

Route::get('/', [tanarController::class, 'tanarListazas'])->name('kezdolap');
Route::get('/kereso', [tanarController::class, 'tanarKereso'])->name('kereso');
Route::get('/tanarprofil/{tanar_id}', [tanarController::class, 'tanarProfil'])->name('tanarProfil');

Route::get('/register',function(){return view('auth/register');})->name('register');
Route::post("/register", [regisztraciosController::class,"reg"]);
Route::get("/register/confirm/{token}",[regisztraciosController::class,"confirm"]);
Route::get('/login',function(){return view('auth/login');})->name('login');

Route::get('/profil',function(){return view('profil');})->name('profil');
Route::get('/home', function(){return view('home');})->name('home');
