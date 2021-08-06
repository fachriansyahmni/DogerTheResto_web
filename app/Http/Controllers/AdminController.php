<?php

namespace App\Http\Controllers;

use App\ItemNotaPesanan;
use App\Menu;
use App\NotaPesanan;
use App\PesananItem;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Nota = NotaPesanan::where('status_nota', "lunas");
        $pendapatanMonth = 0;

        $TransaksiMonthToday = $Nota->whereRaw('MONTH(tgl_bayar) = MONTH(now()) AND YEAR(tgl_bayar) = YEAR(NOW())')->get();
        foreach ($TransaksiMonthToday as $ReceiptByMonth) {
            $pendapatanMonth += $ReceiptByMonth->total_harga;
        }
        $ItemNota = ItemNotaPesanan::whereRaw('MONTH(created_at) = MONTH(now()) AND YEAR(created_at) = YEAR(NOW())')->get();
        $ItemNota2 = ItemNotaPesanan::whereRaw('MONTH(created_at) = MONTH(now()- INTERVAL 1 MONTH)')->get();
        $TotalMenuTerjual = 0;
        $TotalMenuTerjual2 = 0;
        foreach ($ItemNota as $totMenu) {
            $TotalMenuTerjual += $totMenu->qty;
        }
        foreach ($ItemNota2 as $totMenu2) {
            $TotalMenuTerjual2 += $totMenu2->qty;
        }
        if (count($ItemNota) == 0 || count($ItemNota2) == 0) {
            $presentaseMenu = 0;
        } else {
            $presentaseMenu = $TotalMenuTerjual2 / $TotalMenuTerjual * 100 / 100;
        }
        $compacts = ['pendapatanMonth', 'TotalMenuTerjual', 'presentaseMenu'];
        $thedate = date("Y-m-d", time());

        $totMenu = 0;
        $im = PesananItem::select(['menu_id', DB::raw('SUM(qty) as total')])->whereDate('created_at', $thedate)->groupBy('menu_id')->get();
        $ListMenu = [];
        foreach ($im as $index => $bbb) {
            $ListMenu[$index] = ["tgl" => $thedate, "nama_menu" => $bbb->dMenu->nama, "qty" => $bbb->total];
        }
        array_push($compacts, 'ListMenu');
        $data["page_title"] = "Dashboard";
        return view('admin.index', compact($compacts))->with($data);
    }

    public function registration()
    {
        $data["page_title"] = "Manajemen Pengguna";
        $users = DB::table('model_has_roles')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->join('users', 'model_has_roles.model_id', '=', 'users.id')
            ->select('users.*', 'roles.name as role')
            ->get();
        // dd($users);
        return view('admin.registration', compact('users'))->with($data);
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->save();

        $role = DB::table('model_has_roles')
            ->where('model_id', $request->id)
            ->update(['role_id' => $request->role]);
        return redirect()->route('admin-registration');
    }

    public function reset(Request $request)
    {
        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin-registration');
    }

    public function save(Request $request)
    {
        $request->validate([
            "username" => 'required',
            "name" => 'required',
            "password" => 'required',
            "role" => 'required',
        ]);
        $user =  User::create([
            'username' => $request['username'],
            'name' => $request['name'],
            'password' => Hash::make($request['password']),
            'role_id' => $request->role,
        ]);

        $user->assignRole($request['role']);
        return redirect()->route('admin-registration');
    }

    public function delete(Request $request)
    {
        $request->validate([
            "id" => 'required',
        ]);
        $dataRole = DB::table('model_has_roles')->where('model_id', '=', $request->id)->delete();
        $user = User::find($request->id)->delete();
        return redirect()->route('admin-registration');
    }

    public function manageUser()
    {
        return response("manage user");
    }

    public function Role()
    {
        $roles = Role::get();
        $data["page_title"] = "Manajemen Roles";
        return view("admin.role", compact('roles'))->with($data);
    }

    public function roleSave(Request $request)
    {
        $request->validate([
            "name" => 'required',
        ]);
        $role = new Role;
        $role->name = $request->name;
        $role->guard_name = "web";
        $role->save();
        return redirect()->route('admin-role-save');
    }

    public function roleEdit(Request $request, $id)
    {
        $request->validate([
            "name" => 'required',
        ]);
        $role = Role::find($id);
        $role->name = $request->name;
        $role->guard_name = "web";
        $role->save();
        return redirect()->route('admin-role-save');
    }

    public function roleDelete($id)
    {
        // dd($id);
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('admin-role-save');
    }
}
