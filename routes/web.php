<?php


use App\Http\Controllers\ImageController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\TitleController;
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
Route::get('/all_Tigers',[StoryController::class,'all_Tiger'])->name('all');




Route::get('/admin/title', [TitleController::class, 'index'])->name('title');
Route::get('/admin/title/{id}', [TitleController::class, 'show'])->name('one-title');
Route::get('admin/title/edit/{id}', [TitleController::class, 'edit'])->name('edit-title');
Route::post('admin/title/edit/store', [TitleController::class, 'update'])->name('update-title');
Route::get('/admin/Image', [ImageController::class, 'index'])->name('image');
Route::get('/admin/image/new', [ImageController::class, 'create'])->name('new-image');
Route::post('/admin/image/new/send', [ImageController::class, 'upload'])->name('store-image');
Route::get('/admin/image/{id}', [ImageController::class, 'show'])->name('one-image');
Route::get('admin/edit/{id}', [ImageController::class, 'edit'])->name('edit-img');
Route::post('admin/edit/store/{id}', [ImageController::class, 'update'])->name('update-img');
Route::get('/admin/delete/{id}',[ImageController::class,'delete'])->name('delete-img');
