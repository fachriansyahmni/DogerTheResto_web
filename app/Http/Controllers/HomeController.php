<?php

namespace App\Http\Controllers;

use App\Meja;
use App\NotaPesanan;
use App\Pesanan;
use Carbon\Carbon;
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
        $OrderReady = Pesanan::where("status_pesanan", "Siap Diantar")->orderBy("id", "ASC")->get();
        $AllMeja = Meja::get();
        $compacts = ['AllOrders', 'AllMeja', 'OrderReady'];
        return view('pelayan.index', compact($compacts))->with($data);
    }

    public function chefIndex()
    {
        $Orders = Pesanan::where("status_pesanan", "Proses Ke Koki")->orWhere("status_pesanan", "Proses Masak")->orderBy("tglpesan", "ASC")->get();
        $compacts = ['Orders'];
        return view('koki.index', compact($compacts));
    }

    public function cashierIndex()
    {
        $Nota = NotaPesanan::where('status_nota', "lunas");
        $Nota2 = NotaPesanan::where('status_nota', "lunas");
        $pendapatanToday = 0;
        $pendapatanMonth = 0;

        $TransaksiToday = $Nota->whereDate('tgl_bayar', Carbon::today())->get();
        $TransaksiMonthToday = $Nota2->whereRaw('MONTH(tgl_bayar) = MONTH(now()) AND YEAR(tgl_bayar) = YEAR(NOW())')->get();

        $TotalTransaksiToday = count($TransaksiToday);
        $TotalTransaksiMonthToday = count($TransaksiMonthToday);
        foreach ($TransaksiToday as $ReceiptByToday) {
            $pendapatanToday += $ReceiptByToday->total_harga;
        }
        foreach ($TransaksiMonthToday as $ReceiptByMonth) {
            $pendapatanMonth += $ReceiptByMonth->total_harga;
        }
        $compacts = ['TotalTransaksiToday', 'TotalTransaksiMonthToday', 'pendapatanToday', 'pendapatanMonth'];
        return view('kasir.index', compact($compacts));
    }
}
