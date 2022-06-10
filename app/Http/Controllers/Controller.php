<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\config;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



      public function __construct()
    {
        // $email =config::select('email')->where('id', 1)->get();
        // // dd($email);
        // $password =config::select('password')->where('id', 1)->get();

        // config(['MAIL_USERNAME'=> $email]);
        // config(['MAIL_FROM_ADDRESS'=> $email]);
        // config(['MAIL_PASSWORD'=> $password]);
    }
}
