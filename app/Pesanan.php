<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'pelayan_id', 'nomor_meja', 'total_harga', 'tglpesan',
        'status_pesanan',
    ];
}
