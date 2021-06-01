<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function manageMenu()
    {
        $AllMenu = Menu::get();

        $compacts = ['AllMenu'];
        return view('mod.menu.manage', compact($compacts));
    }

    public function storeMenu(Request $request)
    {

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
            'menu_status' => 'available',
            'visible' => Menu::setVisibleMenu($request->visible),
        ];
        $Menu = Menu::create($menuParams);

        if ($Menu) {
            return redirect()->back()->with('success', 'berhasil');
        }
        return redirect()->back();
    }
}
