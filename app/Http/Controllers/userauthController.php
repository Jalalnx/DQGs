<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class userauthController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
        public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showsingupform()
    {
        return view('users.pages.Sigup');
    }
    public function showLoginForm()
    {
        return view('users.pages.Sigup');
    }
}
