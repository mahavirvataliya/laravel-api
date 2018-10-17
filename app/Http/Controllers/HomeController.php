<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery; 

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $groceries =  Grocery::where('user_id',\Auth::user()->id)->get();
        return view('home', compact('groceries'));
    }
}
