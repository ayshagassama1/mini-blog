<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //show login form
    public function login()
    {
        $rep = "";
        return view('login', ['rep'=>$rep]);
    }

    //show signup form
    public function signup()
    {
        return view('signup');
    }

    //logout
    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
