<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/history',[\App\Http\Controllers\StoryController::class,'index'])->name('page2');
Route::get('/' , [\App\Http\Controllers\StoryController::class,'home_view'])->name('home');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///
///
///
///
//Route::get("/login", [AuthController::class, 'index'])->name("login-view");
//Route::post("/login/store", [AuthController::class, 'login'])->name("login");