<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;




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

Route::get('/', function () {
    return view('welcome');
});



//auth route for both
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name
    ('dashboard');
});


// for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/dashboard/crud', 'App\Http\Controllers\DashboardController@crud')->name
    ('dashboard.crud');
    Route::get('/dashboard/crud/post-list', [PostController::class,'postList'])->name('post.list');
});


Route::view('add', 'userdash');
Route::post('add',[TestController::class,'AddTest'])->name('dashboard');
Route::post('/add-post', [PostController::class,'savePost'])->name('save.post');
Route::get('/post-list', [PostController::class,'postList'])->name('post.list');
Route::get('/edit-post/{id}', [PostController::class,'editPost'])->name('edit.post');
Route::get('/delete-post/{id}', [PostController::class,'deletePost'])->name('delete.post');
Route::post('/update-post', [PostController::class,'updatePost'])->name('update.post');

require __DIR__.'/auth.php';
