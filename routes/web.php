<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::controller(GuestController::class)->group(function () {
    Route::get("/", "showIndex")->name("index");
    Route::get("/jelajahi", "showJelajahi")->name("jelajahi");
    Route::get("/ketentuan", "showRequirements")->name("ketentuan");
});

Route::controller(AuthController::class)->group(function () {
    Route::get("/masuk", "showLogin")->name('login');
    Route::get("/daftar", "showRegister")->name('register');
});
