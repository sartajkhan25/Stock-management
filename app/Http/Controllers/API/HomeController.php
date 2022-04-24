<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function homePage()
    {
        return view('auth.login');
    }
}