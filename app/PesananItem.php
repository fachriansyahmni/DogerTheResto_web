<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananItem extends Model
{
    protected $fillable = [
        'pesanan_id', 'menu_id', 'qty', 'harga',
    ];
}
