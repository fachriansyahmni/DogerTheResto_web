<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalBuka extends Model
{
    protected $fillable = [
        'hariAwal', 'jamAwal','hariAkhir','jamAkhir',
    ];
}
