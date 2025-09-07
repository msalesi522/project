<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Route::get('/', function () {
//    return view('posts.index');
//});
Route::post('/hari/{id}',[PostController::class,'updat']);
Route::prefix('posts')->name('posts')->group(function () {
    Route::get('/', [PostController::class,'index'])->name('.index');
    Route::get('/create',[PostController::class,'create'])->name('.create');
    Route::post('/store',[PostController::class,'store'])->name('.store');
    Route::get('single/{post}',[PostController::class,'single'])->name('.single');
    Route::get('update/{post}',[PostController::class,'update'])->name('.update');
    Route::put('update/{post}',[PostController::class,'updatePost'])->name('.update');
    Route::delete('delete/{post}',[PostController::class,'delete'])->name('.delete');
});
Route::middleware('guest')->group(function () {
    Route::get('/register',[RegisterController::class,'show'])->name('register');
    Route::post('/register',[RegisterController::class,'register']);

    Route::get('/login',[loginController::class,'show'])->name('login');
    Route::post('/login',[loginController::class,'login']);

});

Route::post('/logout',[loginController::class,'logout'])->name('logout');
Route::get('dashboard',[DashboardController::class,'index'])->middleware('auth')->name('dashboard');
