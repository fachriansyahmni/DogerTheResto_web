<?php

namespace App\Http\Controllers;

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
        $data["page_title"] = "Dashboard";
        return view('admin.home')->with($data);
    }

    public function registration()
    {
        $users = DB::table('model_has_roles')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->join('users', 'model_has_roles.model_id', '=', 'users.id')
            ->select('users.*', 'roles.name as role')
            ->get();
        // dd($users);
        return view('admin.registration', compact('users'));
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
        $user =  User::create([
            'username' => $request['username'],
            'name' => $request['name'],
            'password' => Hash::make($request['password']),
        ]);

        $user->assignRole($request['role']);
        return redirect()->route('admin-registration');
    }

    public function delete(Request $request)
    {
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
        return view("admin.role", compact('roles'));
    }

    public function roleSave(Request $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $role->guard_name = "web";
        $role->save();
        return redirect()->route('admin-role-save');
    }

    public function roleEdit(Request $request, $id)
    {
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
