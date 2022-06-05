<?php

namespace App\Http\Controllers\admin\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    protected $guard = 'admin';
    // protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        // $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.pages.login');
    }

    public function submit(Request $request)
    {

        // dd($request);


        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (\Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))
            ->withErrors(['Credentials does not match.']);
    }

    public function logout(Request $request)
    {
        // auth()->guard('admin')->logout();

        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return redirect()->route('admin.login_page');
    }
    protected function guard(){
        return Auth::guard('admin');
    }
}
