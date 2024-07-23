<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/',[RoutController::class,'index']);
Route::get('/Clients',[RoutController::class,'clients']);
Route::get('/New Client',[RoutController::class,'newclient']);
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    });
    Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
    return view('dashboard');
    })->name('dashboard');


