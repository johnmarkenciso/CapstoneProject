<?php

use App\Http\Controllers\MarketController;
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

Route::get('/', [MarketController::class, 'index']);
Route::get('/farmers', [MarketController::class, 'farmers']);
Route::get('/aboutus', [MarketController::class, 'about']);
Route::get('/login', [MarketController::class, 'login']);
