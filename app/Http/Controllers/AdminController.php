<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function registration()
    {
        $users = DB::table('model_has_roles')
                    ->join('roles','model_has_roles.role_id','=','roles.id')
                    ->join('users', 'model_has_roles.model_id','=','users.id')
                    ->select('users.id','users.username','users.email','roles.name as role')
                    ->get();
        return view('admin.registration',compact('users'));
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        $role = DB::table('model_has_roles')
                    ->where('model_id',$request->id)
                    ->update(['role_id'=> $request->role]);
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
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->assignRole($request['role']);
        return redirect()->route('admin-registration');
    }

    public function delete(Request $request)
    {
        $dataRole = DB::table('model_has_roles')->where('model_id','=',$request->id)->delete();
        $user = User::find($request->id)->delete();
        return redirect()->route('admin-registration');
    }

    public function manageUser(Type $var = null)
    {
        return response("manage user");
    }
}
