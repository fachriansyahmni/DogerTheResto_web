<?php

namespace App\Http\Controllers;

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
        $totalHarga = 0;
        $Pesanan = new Pesanan([
            "pelayan_id" => Auth::user()->id,
            "nomor_meja" => 1,
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
        return redirect()->back();
    }
}
