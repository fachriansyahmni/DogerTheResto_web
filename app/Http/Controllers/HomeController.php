<?php

namespace App\Http\Controllers;

use App\Meja;
use App\Pesanan;
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
        // return view('home');
        return "error";
    }

    public function waiterIndex()
    {
        $data["page_title"] = "Dashboard Pelayan";
        $AllOrders = Pesanan::orderBy("id", "DESC")->get();
        $AllMeja = Meja::get();
        $compacts = ['AllOrders', 'AllMeja'];
        return view('pelayan.index', compact($compacts))->with($data);
    }

    public function chefIndex()
    {
        $Orders = Pesanan::where("status_pesanan", "Proses Ke Koki")->orderBy("tglpesan", "ASC")->get();
        $compacts = ['Orders'];
        return view('koki.index', compact($compacts));
    }

    public function cashierIndex()
    {
        $compacts = [];
        return view('kasir.index', compact($compacts));
    }
}
