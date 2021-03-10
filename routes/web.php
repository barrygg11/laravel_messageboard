<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\boardsController;

Route::resource('boards', boardsController::class);

Route::get('/', [boardsController::class, 'index'])->name('root');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
