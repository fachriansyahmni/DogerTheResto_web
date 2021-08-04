<?php

namespace App\Http\Controllers;

use App\NotaPesanan;
use App\Pesanan;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function receiptIndex()
    {
        $Receipts = NotaPesanan::orderBy("id", "DESC")->get();
        $AllOrders = Pesanan::where("status_pesanan", '!=', "Lunas")->orderBy("created_at", "DESC")->get();

        $compacts = ['Receipts', 'AllOrders'];
        return view("kasir.receipt", compact($compacts));
    }
}
