<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get("/login", [LoginController::class, 'index'])->name("login");
Route::post("/login/store", [LoginController::class, 'login'])->name("login-view");
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get("/admin", function(){
    return view('admin.dashboard');
})->middleware("auth")->name('dashboard');
