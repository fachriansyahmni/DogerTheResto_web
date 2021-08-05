<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuKategori extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kategori',
    ];

    public $timestamps = false;
}
