<?php

namespace App\Http\Controllers;

use App\Models\Quotes;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
    function index()
    {
        return view('index', [
            "quotes" => Quotes::all()
        ]);
    }

    function create()
    {
        return view('quotes.create');
    }

    function store()
    {
        $formFields = request()->validate([
            'author' => 'required',
            'quote' => 'required',
        ]);

        Quotes::create($formFields);

        return redirect('/');
    }

    function edit(Quotes $quote)
    {
        return view('quotes.edit', ['quote' => $quote]);
    }

    function update(Quotes $quote)
    {
        $formFields = request()->validate([
            'author' => 'required',
            'quote' => 'required',
        ]);

        $quote->update($formFields);

        return redirect('/');
    }

    function delete(Quotes $quote)
    {
        $quote->delete();
        return redirect('/');
    }
}
