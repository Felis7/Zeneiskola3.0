<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tanarController;

Auth::routes();

Route::get('/', [tanarController::class, 'tanarListazas'])->name('home');
Route::get('/kereso', [tanarController::class, 'tanarKereso'])->name('kereso');
Route::get('/tanarprofil/{tanar_id}', [tanarController::class, 'tanarProfil'])->name('tanarProfil');


Route::get('/regisztracio',function(){return view('regisztracio');})->name('regisztracio');
