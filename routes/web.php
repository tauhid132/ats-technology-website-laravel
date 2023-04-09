<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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



Route::get('',[App\Http\Controllers\PageController::class, 'viewHome'])->name('home');
Route::get('/home-internet',[App\Http\Controllers\PageController::class, 'viewHomeInternet'])->name('viewHomeInternet');
Route::get('/corporate-internet',[App\Http\Controllers\PageController::class, 'viewCorporateInternet'])->name('viewCorporateInternet');