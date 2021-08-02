<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoRestoran extends Model
{
    protected $fillable = [
        'alamat', 'telp','fax',
    ];
}
