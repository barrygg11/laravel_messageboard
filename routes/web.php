<?php

use Illuminate\Support\Facades\Route;
use App\Models\apple;

Route::resource('apples', apple::class);

Route::get('/', [apple::class, 'index'])->name('root');
