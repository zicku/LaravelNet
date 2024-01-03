<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dasboard');
// });


Route::get('/index',[HomeController::class,'index'])->name('index');

Route::get('/create',[HomeController::class,'create'])->name('user.create');

Route::post('/store',[HomeController::class,'store'])->name('user.store');

Route::get('/edit/{id}',[HomeController::class,'edit'])->name('user.edit');

Route::post('/update/{id}',[HomeController::class,'update'])->name('user.update');

Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('user.delete');


Route::get('/',[LoginController::class,'index'])->name('login');

Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');

Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');



