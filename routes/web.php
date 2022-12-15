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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/single-page', function () {
    return view('single-page');
})->name('single-page');
Route::get('/', function () {
    $comics = config('dc-comics');
    return view('home-page', compact('comics'));
})->name('home-page');