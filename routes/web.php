<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotesController;
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

Route::get('/', [QuotesController::class, 'index']);
Route::get('/quotes/create', [QuotesController::class, 'create'])->middleware('auth');
Route::post('/quotes/store', [QuotesController::class, 'store'])->middleware('auth');
Route::get('/quotes/{quote}/edit', [QuotesController::class, 'edit'])->middleware('auth');
Route::put('/quotes/{quote}/update', [QuotesController::class, 'update'])->middleware('auth');
Route::delete('/quotes/{quote}/delete', [QuotesController::class, 'delete'])->middleware('auth');

Route::get('/signup', [UserController::class, 'showSignup'])->middleware('guest');
Route::post('/signup', [UserController::class, 'handleSignup'])->middleware('guest');

Route::get('/login', [UserController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'handleLogin'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
