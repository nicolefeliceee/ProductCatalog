<?php

use App\Http\Controllers\ProductController;
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
    return view('home');
})->name('home');

Route::get('/productCatalogue', [ProductController::class, 'index'])->name('productCatalogue');

Route::get('/productCatalogue/{slug}', [ProductController::class, 'details'])->name('productCatalogue.slug');

Route::get('/index', function () {
    return view('home');
})->name('home');
