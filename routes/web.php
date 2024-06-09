<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ItemController::class, 'index'])->name('home');
    Route::resource('items', ItemController::class);
    Route::resource('categories', CategoryController::class);
});
