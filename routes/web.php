<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
})->name('welcome');


Route::get('/register',[authController::class,'registerpage'])->name('registerpage');
Route::get('/login',[authController::class,'loginpage'])->name('loginpage');
Route::post('/user',[authController::class,'registeruser'])->name('registeruser');
Route::post('/login-user', [authController::class, 'loginUser'])->name('loginuser');
