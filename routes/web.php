<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoutController;
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

Route::controller(RoutController::class)->prefix('client')->group(function () {
    Route::get('', 'clients')->name('clients');
    Route::post('store', 'store')->name('client.store');
    Route::get('show/{id}', 'show')->name('client.show');
    Route::get('edit/{id}', 'edit')->name('client.edit');
    Route::put('edit/{id}', 'update')->name('client.update');
    Route::delete('destroy/{id}', 'destroy')->name('client.destroy');
});
   Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});