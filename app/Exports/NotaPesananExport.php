<?php

namespace App\Exports;

use App\NotaPesanan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Support\Facades\DB;

class NotaPesananExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    use Exportable;

    public $kondisi;
    public $param1;
    public $param2;

    public function __construct($kondisi, $param1, $param2)
    {
        $this->kondisi = $kondisi;
        $this->param1 = $param1;
        $this->param2 = $param2;
        // dd($this->kondisi, $this->param1, $this->param2);
    }

    public function headings(): array
    {
        return [
            'Id',
            'Nomor Pesanan',
            'Total Harga',
            'Tanggal Pemesanan',
            'Tanggal Pembayaran',
        ];
    }

    public function collection()
    {
        // return NotaPesanan::all();
        if ($this->kondisi == "day") {
            // $pesanan = DB::table('nota_pesanans')
            //     ->select('id', 'nomor_pesanan', 'total_harga', 'tgl_pesan', 'tgl_bayar')
            //     ->where('tgl_pesan', 'like', $this->param1 . '%')
            //     ->get();
            $pesanan = DB::table('nota_pesanans')
                ->select('id', 'nomor_pesanan', 'total_harga', 'tgl_pesan', 'tgl_bayar')
                ->whereDate('tgl_pesan', $this->param1)
                ->get();
        } else if ($this->kondisi == "month") {
            $teks = explode("-", $this->param1);
            $pesanan = DB::table('nota_pesanans')
                ->select('id', 'nomor_pesanan', 'total_harga', 'tgl_pesan', 'tgl_bayar')
                ->whereMonth('tgl_pesan', $teks[1])
                ->get();
        } else if ($this->kondisi == "year") {
            $pesanan = DB::table('nota_pesanans')
                ->select('id', 'nomor_pesanan', 'total_harga', 'tgl_pesan', 'tgl_bayar')
                ->whereYear('tgl_pesan', $this->param1)
                ->get();
        } else if ($this->kondisi == "custom") {
            // dd($this->param2, $this->param1);
            $pesanan = DB::table('nota_pesanans')
                ->select('id', 'nomor_pesanan', 'total_harga', 'tgl_pesan', 'tgl_bayar')
                ->whereRaw("date(tgl_pesan) >= date('$this->param2') AND date(tgl_pesan) <= date('$this->param1')")->orderBy("tgl_pesan", "DESC")->get();
        }



        return $pesanan;
    }
}
