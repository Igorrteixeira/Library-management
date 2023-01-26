<?php

use App\Http\Controllers\web\BookController;
use App\Http\Controllers\web\LoanController;
use App\Http\Controllers\web\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->group(function(){
    Route::get('/',[UserController::class, 'index'])
    ->name('user.index');
    Route::get('create',[UserController::class, 'create'])
    ->name('user.create');
    Route::post('create',[UserController::class, 'store'])
    ->name('user.store');
    Route::get('edit/{user}',[UserController::class, 'edit'])
    ->name('user.edit');
    Route::put('update/{user}',[UserController::class, 'update'])
    ->name('user.update');
    Route::delete('delete/{id}',[UserController::class, 'destroy'])
    ->name('user.destroy');
});

Route::get('/',[BookController ::class, 'index'])
    ->name('book.index');

Route::prefix('book')->group(function(){
    Route::get('create',[BookController::class, 'create'])
    ->name('book.create');
    Route::post('create',[BookController::class, 'store'])
    ->name('book.store');
    Route::get('edit/{book}',[BookController::class, 'edit'])
    ->name('book.edit');
    Route::put('update/{book}',[BookController::class, 'update'])
    ->name('book.update');
    Route::delete('delete/{id}',[BookController::class, 'destroy'])
    ->name('book.destroy');
});

Route::prefix('loan')->group(function(){
    Route::get('/',[LoanController::class, 'index'])
    ->name('loan.index');
    Route::get('create',[LoanController::class, 'create'])
    ->name('loan.create');
    Route::post('create',[LoanController::class, 'store'])
    ->name('loan.store');
    Route::get('edit/{loan}',[LoanController::class, 'edit'])
    ->name('loan.edit');
    Route::put('update/{loan}',[LoanController::class, 'update'])
    ->name('loan.update');
    Route::delete('delete/{id}',[LoanController::class, 'destroy'])
    ->name('loan.destroy');
});





