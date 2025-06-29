<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get("/", function () {
    return view("home");
})->name("home");

Route::prefix("auth")->name("auth.")->group(function(){

    Route::get("register", [RegisterController::class, "showRegisterForm"])->name("register");
    Route::post("register", [RegisterController::class, "register"]);

    Route::get("login", [LoginController::class, "showLoginForm"])->name("login");
    Route::post("login", [LoginController::class, "login"]);
    
    Route::get("logout", [LoginController::class, "logout"])->name("logout");

});
