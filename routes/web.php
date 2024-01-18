<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [IndexController::class,'index'])->name('home');
Route::get('/signup', [SessionController::class,'signup'])->name('signupform');
Route::get('/login', [SessionController::class,'login'])->name('loginform');
Route::get('/logout', [SessionController::class,'logout'])->name('logout');
Route::get('/post/{id}', [PostController::class,'show']);
Route::get('/user/{id}', [UserController::class,'show']);
Route::post('/signup', [UserController::class,'store'])->name('signup');
Route::post('/login', [UserController::class,'login'])->name('login');


