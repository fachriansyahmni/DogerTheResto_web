<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'pelayan_id', 'nomor_meja', 'total_harga', 'tglpesan',
        'status_pesanan',
    ];

    public function pesananItems()
    {
        return $this->hasMany(PesananItem::class, 'pesanan_id', 'id');
    }

    public function Meja()
    {
        return $this->hasOne(Meja::class, 'id', 'nomor_meja');
    }

    public function Pelayan()
    {
        return $this->hasOne(User::class, 'id', 'pelayan_id');
    }
}
