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

Route::get('/', function () {
    return view('homepage.homepage');
});

Route::get('/', [App\Http\Controllers\HomepageController::class, 'homepage']);
Route::get('/about', [App\Http\Controllers\HomepageController::class, 'about']);
Route::get('/kategori', [App\Http\Controllers\HomepageController::class, 'kategori']);
Route::get('/kontak', [App\Http\Controllers\HomepageController::class, 'kontak']);

