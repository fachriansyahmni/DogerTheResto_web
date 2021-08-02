<?php

namespace App\Http\Controllers;

use App\MenuKategori;
use Illuminate\Http\Request;

class MenuKategoriController extends MenuController
{
    public function index()
    {
        $data["page_title"] = "Manajemen Menu Kategori";
        $AllKategori = MenuKategori::get();

        $compacts = ['AllKategori'];
        return view("mod.menu_kategori.index", compact($compacts))->with($data);
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

    public function editKategori(Request $request, $idKategori)
    {
        $Kategori = MenuKategori::find($idKategori);
        $Kategori->nama_kategori = $request->nama_kategori;
        $Kategori->save();

        return redirect()->back();
    }

    public function deleteKategori($idKategori)
    {
        $Kategori = MenuKategori::find($idKategori);
        $Kategori->delete();
        return redirect()->back();
    }
}
