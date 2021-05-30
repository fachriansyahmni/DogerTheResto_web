<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function manageMenu()
    {
        return view('mod.menu.manage');
    }
}
