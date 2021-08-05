<?php

namespace App\Http\Controllers;

use App\NotaPesanan;
use App\Pesanan;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function receiptIndex()
    {
        $data["page_title"] = "Data Struk Pesanan";
        $Receipts = NotaPesanan::orderBy("id", "DESC")->get();
        $AllOrders = Pesanan::where("status_pesanan", '!=', "Lunas")->orderBy("created_at", "DESC")->get();

        $compacts = ['Receipts', 'AllOrders'];
        return view("kasir.receipt", compact($compacts))->with($data);
    }

    public function reportIndex()
    {
        $data["page_title"] = "Data Struk Pesanan";
        return view('kasir.report')->with($data);
    }
}
