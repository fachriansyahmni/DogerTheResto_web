<?php

namespace App\Http\Controllers;

use App\Meja;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function manageTable()
    {
        $tables = Meja::get();
        $data["page_title"] = "Manajemen Meja";
        return view('admin.table', compact('tables'))->with($data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "nomorMeja" => 'required',
        ]);
        $meja = new Meja;
        $meja->nomor_meja = $request->nomorMeja;
        $meja->status = $request->status;
        $meja->save();
        return redirect()->route('manage.table.save')->with("success", "Meja Dengan Nomor " . $meja->nomor_meja . " Berhasil Ditambah");
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            "nomorMeja" => 'required',
        ]);
        $meja = Meja::find($id);
        $meja->nomor_meja = $request->nomorMeja;
        $meja->status = $request->status;
        $meja->save();
        return redirect()->route('manage.table.save');
    }

    public function delete($id)
    {
        $meja = Meja::find($id);
        $meja->delete();
        return redirect()->route('manage.table.save');
    }
}
