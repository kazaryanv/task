<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;
require ("auth.php");
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
Route::get('/history',[StoryController::class,'index'])->name('page2');
Route::get('/' , [StoryController::class,'home_view'])->name('home');
//Route::get('/admin' , [LoginController::class,'dashboard'])->name('dashboard');
