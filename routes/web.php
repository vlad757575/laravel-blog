<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\citiesController;

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





Route::resource('cities', citiesController::class);



// Route::prefix('administrateur')->group(function () {

//     Route::get('/utilissateurs', function () {
//         return view('users');
//     });
//     Route::get('articles', function () {
//         return view('articles');
//     });
//     Route::get('comments', function () {
//         return view('comments');
//     });
//     Route::get('fake', function () {
//         return response()->json(
//             [
//                 'user' => 'John',
//                 'genre' => 'male',
//                 'age' => '30 ans'

//             ]
//         );
//     });
// });
