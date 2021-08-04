<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function receiptIndex()
    {
        return view('kasir.receipt');
    }

    public function reportIndex()
    {
        return view('kasir.report');
    }
}
