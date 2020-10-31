<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quotes = Quote::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->paginate(8);

        return view('quotes.index', compact("quotes"));
    }
}
