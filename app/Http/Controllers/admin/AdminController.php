<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{

    protected $guard = 'admin';
    public function __construct()
    {
        $this->middleware('auth:admin');
        // return view('admin.pages.dashboard'); 
    }

    public function index()
    {
        return view('admin.pages.dashboard'); //ss
    }
}
