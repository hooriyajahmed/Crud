<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Middleware\validuser;
use App\Http\Middleware\validrole;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
})->name('welcome');


Route::get('/register',[authController::class,'registerpage'])->name('registerpage');
Route::get('/login',[authController::class,'loginpage'])->name('loginpage');
//UserRegister
Route::post('/user',[authController::class,'registeruser'])->name('registeruser');
//UserLogin
Route::post('/login-user', [authController::class, 'loginuser'])->name('loginuser');
//Admin
Route::get('/admin',[adminController::class, 'adminindex'])->name('adminindex')->middleware(validrole::class);
//User
Route::get('/user',[userController::class, 'userindex'])->name('userindex')->middleware(validuser::class);
//Logout
Route::get('/logout',[authController::class,'logout'])->name('logout');
