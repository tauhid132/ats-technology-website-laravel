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
Route::get('/sme-internet',[App\Http\Controllers\PageController::class, 'viewSMEInternet'])->name('viewSMEInternet');
Route::get('/pay-bill',[App\Http\Controllers\PageController::class, 'viewPayBill'])->name('viewPayBill');
Route::get('/contact-us',[App\Http\Controllers\PageController::class, 'viewContact'])->name('viewContact');
Route::get('/get-new-connection',[App\Http\Controllers\PageController::class, 'viewOnlineReg'])->name('viewOnlineReg');
Route::post('/get-new-connection',[App\Http\Controllers\PageController::class, 'onlineReg']);
Route::get('/mail',[App\Http\Controllers\PageController::class, 'mail'])->name('mail');