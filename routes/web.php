<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotesController;
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
Route::get('/quotes/create', [QuotesController::class, 'create']);
Route::post('/quotes/store', [QuotesController::class, 'store']);
Route::get('/quotes/{quote}/edit', [QuotesController::class, 'edit']);
Route::put('/quotes/{quote}/update', [QuotesController::class, 'update']);
Route::delete('/quotes/{quote}/delete', [QuotesController::class, 'delete']);
