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
Route::post('/post', [PostController::class,'store'])->name('post');
Route::get('/userposts', [PostController::class,'showPosts'])->name('userposts');
Route::get('/editpost/{id}', [PostController::class,'edit'])->name('editpost');
Route::post('/updatepost/{id}', [PostController::class,'update'])->name('updatepost');
Route::get('/deletepost/{id}', [PostController::class,'destroy'])->name('deletepost');
Route::get('/createpost', [PostController::class,'create'])->name('createpost');
Route::post('createpost', [PostController::class,'store'])->name('createpost');


