<?php

namespace App\Http\Controllers;

use App\Meja;
use App\Menu;
use App\Pesanan;
use App\PesananItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function pemesananIndex()
    {
        $data["page_title"] = "Pemesanan Menu";
        $compacts = [];

        $AllMenu = Menu::where('visible', 1)->get();

        array_push($compacts, 'AllMenu');

        return view("mod.order.pemesanan", compact($compacts))->with($data);
    }

    public function konfirmasiOrder(Request $request)
    {
        $ListMenuId = $request->menuid;
        $MenuQTY = $request->qty;
        $DataMeja = Meja::find($request->noMeja);
        $totalHarga = 0;
        $Pesanan = new Pesanan([
            "pelayan_id" => Auth::user()->id,
            "nomor_meja" => $request->noMeja,
            "total_harga" => $totalHarga,
            "tglpesan" => Carbon::now()->toDateTimeString(),
            "status_pesanan" => "Proses Ke Koki"
        ]);
        $Pesanan->save();
        foreach ($ListMenuId as $index => $menuId) {
            $DataMenu = Menu::find($menuId);
            if ($DataMenu == null) continue;
            $amount = $DataMenu->harga * $MenuQTY[$index];
            $ItemPesanan = new PesananItem([
                "pesanan_id" => $Pesanan->id,
                "menu_id" => $menuId,
                "qty" => $MenuQTY[$index],
                "harga" => $amount
            ]);
            $ItemPesanan->save();
            $totalHarga += $amount;
            $DataMenu->stok -= $MenuQTY[$index];
            $DataMenu->save();
        }

        $Pesanan->total_harga = $totalHarga;
        $Pesanan->save();

        $DataMeja->status = 0;
        $DataMeja->save();
        return redirect()->back();
    }

    public function listOrder()
    {
        $AllOrders = Pesanan::orderBy("created_at", "DESC")->get();
        $compacts = ['AllOrders'];
        return view("mod.order.list_order", compact($compacts));
    }
    public function reportIndex()
    {
        $AllOrders = Pesanan::whereMonth("tglpesan", '=', date("m"))->orderBy("created_at", "DESC")->get();
        $compacts = ['AllOrders'];
        return view("kasir.reports", compact($compacts));
    }

    public function ajaxGetDetailPesanan($id)
    {
        $Pesanan = Pesanan::find($id);
        $returnHTML = view('mod.order.details-order')->with('Pesanan', $Pesanan)->render();
        return response()->json(['html' => $returnHTML]);

    }
}
