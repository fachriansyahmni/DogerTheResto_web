<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function manageMenu()
    {
        return view('mod.menu.manage');
    }

    public function storeMenu(Request $request)
    {
        $menuParams = [
            'nama' => $request->nama_menu,
            'harga' => $request->harga_menu,
            'menu_kategori_id' => 1, //example,
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
