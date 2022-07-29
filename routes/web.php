<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\citiesController;
use App\Http\Controllers\ArticleController;

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




Route::get('/', [MainController::class, 'main'])->name('home');

Route::get('/main', [MainController::class, 'main']);
Route::get('/articles', [ArticleController::class, 'index'])->name('article');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('showArticle');


Auth::routes();
