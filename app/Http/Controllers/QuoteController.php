<?php

namespace App\Http\Controllers;

use App\Quote;
use Auth;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quotes = Quote::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->paginate(8);

        return view('quotes.index', compact("quotes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'the_quote' => 'required',
            'author' => 'required'
        ]);

        $quote = new Quote();
        $quote->the_quote = request('the_quote');
        $quote->author = request('author');
        $quote->user_id = Auth::id();

        if($quote->save()){
            return redirect('/quotes')->with('success', 'Successfully saved');
        } else {
            return redirect('/quotes')->with('failure', 'Not saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quote = Quote::where('user_id', Auth::id())->findOrFail($id);

        return view('quotes.edit', compact("quote"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'the_quote' => 'required',
            'author' => 'required'
        ]);

        $quote = Quote::where('user_id', Auth::id())->findOrFail($id);
        $quote->the_quote = request('the_quote');
        $quote->author = request('author');

        if($quote->save()){
            return redirect('/quotes')->with('success', 'Successfully updated');
        } else {
            return redirect('/quotes')->with('failure', 'Not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $quote = Quote::where('user_id', Auth::id())->findOrFail($id);

        if($quote->delete()){
            return redirect('/quotes')->with('success', 'Successfully deleted');
        } else {
            return redirect('/quotes')->with('failure', 'Not deleted');
        }

    }
}
