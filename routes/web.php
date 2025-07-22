<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Artist\ArtistEnrollmentController;

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

Route::prefix("artist")->name("artist.")->group(function(){
    
    Route::get("enrollment", [ArtistEnrollmentController::class, "apply"])->name("enrollment.form");
    Route::post("enrollment", [ArtistEnrollmentController::class, "submitRequest"])->name("enrollment.submit");

    Route::get("enrollment/terms", [ArtistEnrollmentController::class, "enrollmentTerms"])->name("enrollment.terms");
    Route::get("enrollment/message", [ArtistEnrollmentController::class, "enrollmentMessage"])->name("enrollment.message");
    
});

