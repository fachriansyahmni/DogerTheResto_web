<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemNotaPesanan extends Model
{
    protected $fillable = [
        'id_nota', 'nama_menu', 'qty', 'harga', 'total_harga'
    ];
}
