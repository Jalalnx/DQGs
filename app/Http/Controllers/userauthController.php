<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class userauthController extends Controller
{



   public function loginFrom(){
    return view('users.pages.login');
   }
   
   public function singupfrom(){
    return view('users.pages.singup');
   }

   public function submit(Request $request)
   {

       // dd($request);


       $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:6'
       ]);


       if (\Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
           return redirect()->route('admin.dashboard');
       }

       return redirect()->back()->withInput($request->only('email', 'remember'))
           ->withErrors(['البيانات المدخله غير مطابقه']);
   }


   public function logout(Request $request)
    {
        // auth()->guard('admin')->logout();

        Auth::guard('users')->logout();

        $request->session()->invalidate();

        return redirect()->route('admin.login_page');
    }
    protected function guard(){
        return Auth::guard('admin');
    }


}
