<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\courseController;
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
Route::post('/register.user',[authController::class,'registeruser'])->name('registeruser');
//UserLogin
Route::post('/login.user', [authController::class, 'loginuser'])->name('loginuser');
//Admin
// Route::get('/admin',[adminController::class, 'adminindex'])->name('adminindex');
Route::get('/adminpage',[adminController::class,"index"])->name('adminindex')->middleware(validrole::class);
//User
Route::get('/user.index',[userController::class, 'userindex'])->name('userindex')->middleware(validuser::class);
//Logout
Route::get('/logout',[authController::class,'logout'])->name('logout');
//all users
Route::get('/admin.alluser',[adminController::class,"alluser"])->name('alluser')->middleware(validrole::class);
//delete
Route::get('/delete/{id}',[adminController::class,'deleteuser'])->name('deleteuser')->middleware(validrole::class);
//edit
Route::get('/edit/{id}',[adminController::class,'edituser'])->name('edituser')->middleware(validrole::class);
//update
Route::post('/update/{id}',[adminController::class,'updateuser'])->name('updateuser')->middleware(validrole::class);
//courses
Route::get('admin.insertcourse',[courseController::class,"insert"])->name('insertcourse');

Route::post('admin.insert',[courseController::class,"insertcourse"])->name('insert');