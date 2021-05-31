<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'harga', 'menu_kategori_id', 'menu_status', 'visible',
    ];

    public function menuKategori()
    {
        return $this->hasOne(MenuKategori::class, 'id', 'menu_kategori_id');
    }


    public static function setVisibleMenu($visible)
    {
        if ($visible == 'on') {
            return 1;
        }
        return 0;
    }
}
