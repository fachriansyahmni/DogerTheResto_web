<?php

namespace App\Http\Controllers;

use App\Meja;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function manageTable()
    {
        $tables = Meja::get();
        return view('admin.table', compact('tables'));
    }

    public function save(Request $request)
    {
        $meja = new Meja;
        $meja->nama_meja = $request->name;
        $meja->status = $request->status;
        $meja->save();
        return redirect()->route('manage.table.save');
    }

    public function edit(Request $request, $id)
    {
        $meja = Meja::find($id);
        $meja->nama_meja = $request->name;
        $meja->status = $request->status;
        $meja->save();
        return redirect()->route('manage.table.save');
    }

    public function FunctionName($id)
    {
        $meja = Meja::find($id);
        $meja->delete();
        return redirect()->route('manage.table.save');
    }
}
