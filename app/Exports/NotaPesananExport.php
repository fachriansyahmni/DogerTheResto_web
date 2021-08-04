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
        $pesanan = DB::table('nota_pesanans')
            ->select('id', 'nomor_pesanan', 'total_harga', 'tgl_pesan', 'tgl_bayar')->get();

        return $pesanan;
    }
}
