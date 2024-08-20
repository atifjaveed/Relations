<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/w', function () {
    return view('welcome');
});
Route::resource('/',UserController::class);
Route::resource('user.posts',PostController::class);
Route::resource('category',CategoryController::class);
Route::get('post',[PostController::class, 'index'])->name('indexFn');
Route::resource('post.comments',CommentController::class);
// Route::get('comment',[CommentController::class, 'index'])->name('indexFn');
