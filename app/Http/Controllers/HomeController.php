<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function waiterIndex()
    {
        return view('pelayan.index');
    }

    public function chefIndex()
    {
        return view('koki.index');
    }

    public function cashierIndex()
    {
        return view('kasir.index');
    }
}
