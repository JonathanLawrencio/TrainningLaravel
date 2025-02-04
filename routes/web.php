<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [NavigationController::class, 'index'])->name('index');
Route::get('/add', [NavigationController::class, 'add'])->name('add.user');

Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

