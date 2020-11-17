<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\newreleasesController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\newreleaseController;
use App\Http\Controllers\Auth2Controller;
use App\Http\Controllers\HomeClientController;
use App\Http\Controllers\UserController;

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

Route::get('beranda', [HomeController::class, 'showBeranda']);

Route::get('test/{books}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::get('books', [booksController::class, 'index']);
Route::get('produk/create', [booksController::class, 'create']);
Route::post('books', [booksController::class, 'store']);
Route::get('booksk/{books}', [booksController::class, 'show']);
Route::get('books/{books}/edit', [booksController::class, 'edit']);
Route::put('books/{books}', [booksController::class, 'update']);
Route::delete('books/{books}', [booksController::class, 'destroy']);

Route::get('beranda2', [HomeClientController::class, 'showBeranda2']);
Route::get('books', [HomeClientController::class, 'showProduk2']);
Route::get('newreleases', [HomeClientController::class, 'showKategori2']);
Route::get('search', [HomeClientController::class, 'showPromo2']);

Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);
