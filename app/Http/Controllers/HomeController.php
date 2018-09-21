<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

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
        $files = File::orderBy('updated_at', 'desc')->skip(1)->get();
        $activeFile = File::orderBy('updated_at', 'desc')->first();

        return view('home', compact(['files', 'activeFile']));
    }
}
