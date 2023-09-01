<?php

use App\Http\Controllers\Admin\Master\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::prefix('master/user')->name('master.user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
    });
});
