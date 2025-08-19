<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EyceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register/', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('login/', [AuthController::class, 'showLogin'])->name('show.login');
Route::post('register/', [AuthController::class, 'register'])->name('register');
Route::post('login/', [AuthController::class, 'login'])->name('login');

Route::get('/eyce', [EyceController::class, 'index'])->name('eyce.index');
Route::get('/eyce/create', [EyceController::class, 'create'])->name('eyce.create');
Route::get('/eyce/{id}', [EyceController::class, 'show'])->name('eyce.show');
Route::post('/eyce', [EyceController::class, 'store'])->name('eyce.store');
Route::delete('/eyce/{id}', [EyceController::class, 'destroy'])->name('eyce.destroy');
