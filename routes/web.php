<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/',[PagesController::class,'index']);
Route::resource('/blog',PostsController::class);
//Route::get('/blog',[\App\Http\Controllers\PostsController::class, 'index'])->name('blog.index');
//Route::get('/blog/create',[\App\Http\Controllers\PostsController::class, 'create'])->name('blog.create');
//Route::get('/blog/store{slug}',[\App\Http\Controllers\PostsController::class, 'store'])->name('blog.store');

Auth::routes();

//Route::get('/home',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');

