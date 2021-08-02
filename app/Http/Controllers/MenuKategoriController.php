<?php

namespace App\Http\Controllers;

use App\MenuKategori;
use Illuminate\Http\Request;

class MenuKategoriController extends MenuController
{
    public function index()
    {
        return view("mod.menu_kategori.index");
    }

    public function store(Request $request)
    {
        $MK = new MenuKategori([
            "nama_kategori" => $request->nama_kategori
        ]);

        if ($MK->save()) {
            return redirect()->back()->with('success', 'berhasil');
        }
        return redirect()->back();
    }
}
