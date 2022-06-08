<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class userauthController extends Controller
{



   public function loginFrom(){
    return view('users.pages.login');
   }

   public function singupfrom(){
    return view('users.pages.singup');
   }


   public function NewAcount(Request $request){

    $user = User::create($request->only("parent_name","child_name","age", "address","phone_number","email")+
       [
       "password" => bcrypt($request->input('password') ),
      ]);

      if($user){
        \Auth::login($user);
        toastr()->success('تم تسجيل الحساب بنجاح ');
         return redirect()->route('home');
      }
  }

   public function submit(Request $request)
   {

       // dd($request);


       $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:6'
       ]);


       if (\Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        toastr()->info('تم تسجيل الدخول بنجاح ');
        return redirect()->route('loginUser');
       }
       toastr()->error('حطاء في البيانات المرفقه ');
       return redirect()->route('Diagnosis');
   }


   public function logout(Request $request)
    {

        auth()->logout();
        $request->session()->invalidate();
        toastr()->warning('تم تسجيل الخروج من الموقع ');
        // redirect to homepage
        return redirect('/');
    }

    protected function guard(){
        return Auth::guard('web');
    }


}
