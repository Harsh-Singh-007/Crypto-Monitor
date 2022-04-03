<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\AuthController;
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

Route::get('/home', [CryptoController::class, 'getData'])->name('home');

Route::get('/about', [CryptoController::class, 'about'])->name('about');
Route::get('/auth/registration', [AuthController::class, 'getRegister'])->name('getRegister');
Route::post('/auth/registration',[AuthController::class, 'postRegister'])->name('postRegister');

Route::get('/',[AuthController::class,'getLogin'])->name('getLogin');
Route::post('/auth/login',[AuthController::class,'postLogin'])->name('postLogin');