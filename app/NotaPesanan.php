<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPesanan extends Model
{
    protected $fillable = [
        'nomor_pesanan',
        'total_harga',
        'tgl_pesan',
        'tgl_bayar',
        'status_nota',
        'kasir_id'
    ];
}
