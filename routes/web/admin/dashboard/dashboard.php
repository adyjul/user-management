<?php

use App\Http\Controllers\Admin\Master\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [Dashboard::class, 'index'])->name('index');
    });
});
