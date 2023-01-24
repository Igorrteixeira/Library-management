<?php

use App\Http\Controllers\web\User;
use App\Http\Controllers\web\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[UserController::class, 'index'])->name('user');

Route::post('create-user',[UserController::class, 'store'])->name('create.store');


