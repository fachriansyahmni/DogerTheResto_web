<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        // return view('auth.login-deskapp');
        return view('auth.login-resto');
    }

    protected function authenticated(Request $request, $user)
    {
        // dd($user);
        if ($user->hasRole('admin')) {
            return redirect()->route('admin-index');
        }

        if ($user->hasRole('pelayan')) {
            return redirect()->route('waiter-index');
        }
        if ($user->hasRole('koki')) {
            return redirect()->route('chef-index');
        }
        if ($user->hasRole('kasir')) {
            return redirect()->route('cashier-index');
        }
        return redirect()->route('home');
    }
}
