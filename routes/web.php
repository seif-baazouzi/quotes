<?php

use Illuminate\Support\Facades\Route;
use App\Models\Quotes;

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
    return view('index', [
        "quotes" => Quotes::all()
    ]);
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/store', function () {
    $formFields = request()->validate([
        'author' => 'required',
        'quote' => 'required',
    ]);

    Quotes::create($formFields);

    return redirect('/');
});

Route::get('/edit/{quote}', function (Quotes $quote) {
    return view('edit', [ 'quote' => $quote]);
});

Route::put('/update/{quote}', function (Quotes $quote) {
    $formFields = request()->validate([
        'author' => 'required',
        'quote' => 'required',
    ]);

    $quote->update($formFields);

    return redirect('/');
});

Route::delete('/delete/{quote}', function (Quotes $quote) {
    $quote->delete();
    return redirect('/');
});
