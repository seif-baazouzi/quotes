<?php

namespace App\Http\Controllers;

use App\Models\Quotes;

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

        $formFields['user'] = auth()->id();
        Quotes::create($formFields);

        return redirect('/');
    }

    function edit(Quotes $quote)
    {
        if ($quote->user != auth()->id()) return redirect('/');
        return view('quotes.edit', ['quote' => $quote]);
    }

    function update(Quotes $quote)
    {
        if ($quote->user != auth()->id()) return redirect('/');

        $formFields = request()->validate([
            'author' => 'required',
            'quote' => 'required',
        ]);

        $quote->update($formFields);

        return redirect('/');
    }

    function delete(Quotes $quote)
    {
        if ($quote->user != auth()->id()) return redirect('/');

        $quote->delete();
        return redirect('/');
    }
}
