<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EyceController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(AuthController::class)->group(function() {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login'); 
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(EyceController::class)->group(function() {
    Route::get('/eyce', 'index')->name('eyce.index');
    Route::get('/eyce/create', 'create')->name('eyce.create');
    Route::get('/eyce/{id}', 'show')->name('eyce.show');
    Route::post('/eyce', 'store')->name('eyce.store');
    Route::delete('/eyce/{id}', 'destroy')->name('eyce.destroy');
});

