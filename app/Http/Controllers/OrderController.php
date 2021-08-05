<?php

namespace App\Http\Controllers;

use App\ItemNotaPesanan;
use App\Meja;
use App\Menu;
use App\NotaPesanan;
use App\Pesanan;
use App\PesananItem;
use Carbon\Carbon;
use App\Exports\NotaPesananExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public $kondisi;
    public $param1;
    public $param2;

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
        $data["page_title"] = "Daftar Pesanan";
        $AllOrders = Pesanan::orderBy("created_at", "DESC")->get();
        $compacts = ['AllOrders'];
        return view("mod.order.list_order", compact($compacts))->with($data);
    }
    public function reportIndex()
    {
        $data["page_title"] = "Laporan Penghasilan";
        $thedate = date("Y-m-d", time());
        $im = PesananItem::select(['menu_id', DB::raw('SUM(qty) as total')])->whereDate('created_at', $thedate)->groupBy('menu_id')->get();
        $ListMenu = [];
        foreach ($im as $index => $bbb) {
            $ListMenu[$index] = ["tgl" => $thedate, "nama_menu" => $bbb->dMenu->nama, "qty" => $bbb->total];
        }

        $AllOrders = NotaPesanan::whereMonth("tgl_pesan", '=', date("m"))->orderBy("created_at", "DESC")->get();
        // dd($AllOrders);
        $compacts = ['AllOrders', "ListMenu"];
        return view("kasir.reports", compact($compacts))->with($data);
    }

    public function ajaxGetDetailPesanan($id)
    {
        $Pesanan = Pesanan::find($id);
        $returnHTML = view('mod.order.details-order')->with('Pesanan', $Pesanan)->render();
        return response()->json(['html' => $returnHTML]);
    }

    public function changeProses(Request $request, $id)
    {
        $Pesanan = Pesanan::find($id);
        $status = $request->status;
        $Pesanan->status_pesanan = $status;
        $Pesanan->save();

        return redirect()->back();
    }

    public function storeReceipt($idpesanan)
    {
        $Pesanan = Pesanan::find($idpesanan);
        $Receipt = new NotaPesanan([
            'nomor_pesanan' => $Pesanan->id,
            'total_harga' => $Pesanan->total_harga,
            'tgl_pesan' => $Pesanan->tglpesan,
            'tgl_bayar' => date("Y-m-d"),
            'status_nota' => "Lunas",
            'kasir_id' => Auth::user()->id
        ]);
        $Receipt->save();

        foreach ($Pesanan->pesananItems as $item) {
            $itemNota = new ItemNotaPesanan([
                'id_nota' => $Receipt->id,
                'nama_menu' => $item->dMenu->nama,
                'qty' => $item->qty,
                'harga' => $item->dMenu->harga,
                'total_harga' => $item->harga
            ]);
            $itemNota->save();
        }
        $Pesanan->status_pesanan = "LUNAS";
        $Pesanan->save();

        $Meja = Meja::find($Pesanan->nomor_meja);
        $Meja->status = 1;
        $Meja->save();
        return redirect()->back();
    }

    public function filter(Request $request)
    {
        // dd($request);
        if ($request->btn == "day") {
            $kondisi = $request->btn;
            $param1 = $request->date;
            // dd($this->param1);
            $AllOrders = NotaPesanan::whereDate("tgl_pesan", $request->date)->get();
            $compacts = ['AllOrders', 'kondisi', 'param1'];
        } else if ($request->btn == "month") {
            $kondisi = $request->btn;
            $param1 = $request->date;
            $teks = explode("-", $request->date);
            $AllOrders = NotaPesanan::whereMonth("tgl_pesan", $teks[1])->get();
            $compacts = ['AllOrders', 'kondisi', 'param1'];
        } else if ($request->btn == "year") {
            $kondisi = $request->btn;
            $param1 = $request->date;
            $AllOrders = NotaPesanan::whereYear("tgl_pesan", $request->date)->get();
            $compacts = ['AllOrders', 'kondisi', 'param1'];
        } else if ($request->btn == "custom") {
            $kondisi = $request->btn;
            $param1 = $request->date1;
            $param2 = $request->date2;
            $AllOrders = NotaPesanan::whereRaw("date(tgl_pesan) >= date('$request->date2') AND date(tgl_pesan) <= date('$request->date1')")->orderBy("tgl_pesan", "DESC")->get();
            $compacts = ['AllOrders', 'kondisi', 'param1', 'param2'];
        }

        return view("kasir.reports", compact($compacts));
    }

    public function getKondisi()
    {
        return $this->kondisi;
    }

    public function export(Request $request)
    {
        // dd($this->getKondisi());
        return Excel::download(new NotaPesananExport($request->kondisi, $request->param1, $request->param2), 'laporan.xlsx');
    }

    public function cetak()
    {
        echo $this->kondisi;
    }
}
