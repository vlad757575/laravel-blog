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
Route::get('/articles', [ArticleController::class, 'index'])->name('article');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('showArticle');

Route::get('/admin/articles', [ArticleController::class, 'admin'])->name('admin');
Route::get('/admin/articles/delete/{slug}', [ArticleController::class, 'destroy'])->name('delete');
Route::get('/admin/articles/edit/{slug}', [ArticleController::class, 'edit'])->name('edit');
Route::get('/admin/articles/new-article', [ArticleController::class, 'create'])->name('newArticle')->middleware('admin');
Route::post(':admin/articles/store', [ArticleController::class, 'store'])->name('store')->middleware('admin');


Auth::routes();
