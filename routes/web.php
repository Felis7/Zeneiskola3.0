<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tanarController;

Auth::routes();

Route::get('/home', [tanarController::class, 'tanarListazas'])->name('home');
Route::get('/kereso', [tanarController::class, 'tanarKereso'])->name('kereso');



Route::get('/',[tanarController::class,'tanarListazas']);
Route::get('/regisztracio',function(){return view('regisztacio');})->name('regisztracio');
