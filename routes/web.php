<?php

use App\Http\Controllers\web\User;
use App\Http\Controllers\web\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function(){

    Route::get('/',[UserController::class, 'index'])
    ->name('user.index');

    Route::get('create',[UserController::class, 'create'])
    ->name('user.create');

    Route::post('create',[UserController::class, 'store'])->name('user.store');

    Route::get('edit/{user}',[UserController::class, 'edit'])
    ->name('user.edit');

    Route::put('update/{user}',[UserController::class, 'update'])
    ->name('user.update');

    Route::delete('delete/{id}',[UserController::class, 'destroy'])
    ->name('user.destroy');

});






