<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return(Referensi::dokter());
    // dd(Antrian::getListTask(['kodebooking' => "9609a0"]));
    return redirect(route('auth.login.get'));
});


Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [LoginController::class, 'loginGet'])->name('login.get')->middleware(['guest']);
    Route::get('register', [LoginController::class, 'registerGet'])->name('register.get')->middleware(['guest']);

    Route::post('register', [LoginController::class, 'registerPost'])->name('register.post')->middleware(['guest']);

    Route::post('login', [LoginController::class, 'loginPost'])->name('login.post')->middleware(['guest']);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});
