<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'create'])
    ->middleware('auth')
    ->name('articles.create');

Route::get('/articles/{articles}/edit', [ArticleController::class, 'edit'])
    ->middleware('auth')
    ->name('articles.edit');

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::resource('/articles', ArticleController::class);

Route::get('/user/{name}', [UserController::class, 'show'])->name('user');
