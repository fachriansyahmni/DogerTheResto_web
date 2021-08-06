<?php

namespace App\Http\Controllers;

use App\Menu;
use App\MenuKategori;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function manageMenu()
    {
        $data["page_title"] = "Manajemen Menu Makanan";
        $AllMenu = Menu::where('visible', 1)->get();

        $MenuKategoris = MenuKategori::get();
        $ListStatusMenu = Menu::LISTMENUSTATUS;
        $compacts = ['AllMenu', 'MenuKategoris', 'ListStatusMenu'];
        return view('mod.menu.manage', compact($compacts))->with($data);
    }

    public function storeMenu(Request $request)
    {
        $request->validate([
            "nama_menu" => 'required|string',
            "harga_menu" => 'required|integer',
            "stok" => 'required|integer',
            "menu_status" => 'required',
        ]);
        if ($request->hasFile('gambar')) {
            $gambarMenu = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img/menu-images'), $gambarMenu);
        } else {
            $gambarMenu = Menu::DEFAULTIMAGEMENU;
        }

        $menuParams = [
            'nama' => $request->nama_menu,
            'harga' => $request->harga_menu,
            'menu_kategori_id' => 1, //example,
            'gambar' => $gambarMenu,
            'stok' => $request->stok,
            'menu_status' => $request->menu_status,
            'visible' => Menu::setVisibleMenu("on"),
        ];
        $Menu = Menu::create($menuParams);

        if ($Menu) {
            return redirect()->back()->with('success', 'berhasil');
        }
        return redirect()->back();
    }

    public function editMenu(Request $request, $idmenu)
    {
        $request->validate([
            "nama_menu" => 'required',
            "harga_menu" => 'required|integer',
            "stok" => 'required|integer',
            "menu_status" => 'required',
            "menu_kategori" => 'required',
        ]);
        $Menu = Menu::find($idmenu);
        if ($request->hasFile('gambar')) {
            $gambarMenu = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img/menu-images'), $gambarMenu);
        } else {
            $gambarMenu = $Menu->gambar;
        }

        if ($request->visible == "on") {
            $rvisible = 1;
        } else {
            $rvisible = 0;
        }

        $Menu->nama = $request->nama_menu;
        $Menu->harga = $request->harga_menu;
        $Menu->menu_kategori_id = $request->menu_kategori;
        $Menu->gambar = $gambarMenu;
        $Menu->stok = $request->stok;
        $Menu->visible =  $rvisible;
        $Menu->menu_status = $request->menu_status;
        $editSv = $Menu->save();

        if ($editSv) {
            return redirect()->back()->with('success', 'berhasil');
        }
        return redirect()->back();
    }

    public function deleteMenu($idmenu)
    {
        $Menu = Menu::find($idmenu);
        $Menu->visible = 0;
        $Menu->save();
        return redirect()->back();
    }

    public function editStatus(Request $request, $idmenu)
    {
        $Menu = Menu::find($idmenu);
        $Menu->menu_status = $request->menu_status;
        $Menu->save();
        return redirect()->back();
    }

    public function allMenu()
    {
        $data["page_title"] = "Status Menu";
        $AllMenu = Menu::orderBy("created_at", "DESC")->get();
        $compacts = ['AllMenu'];
        return view("koki.status_menu", compact($compacts))->with($data);
    }
}
