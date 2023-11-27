<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tanarController;
use App\Http\Controllers\regisztraciosController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\profilController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

Auth::routes();

Route::get('/', [tanarController::class, 'tanarListazas'])->name('kezdolap');
Route::get('/kereso', [tanarController::class, 'tanarKereso'])->name('kereso');
Route::get('/tanarprofil/{tanar_id}', [tanarController::class, 'tanarProfil'])->name('tanarProfil');

Route::get('/register',function(){return view('auth/register');})->name('register');
Route::post("/register", [regisztraciosController::class,"reg"]);
Route::get("/register/confirm/{token}",[regisztraciosController::class,"confirm"]);
Route::get('/login',function(){return view('auth/login');})->name('login');
Route::get('/kijelentkezes',function(){Auth::logout();return redirect("login");})->name("logout");

Route::get('/profil',[profilController::class,"profilBetoltes"])->name('profil');
Route::post("/profil/profilMentes", [profilController::class,"adatMentes"])->name("profilMentes");
Route::get('/home', function(){return view('home');})->name('home');

Route::get('/admin/felhasznalokezeles',[adminController::class,'userLista'])
->name('adminUserLista')
->middleware("admin");

Route::post('/admin/delete-user', [userController::class, 'deleteUser'])->name('adminUserLista')
->middleware("admin");
