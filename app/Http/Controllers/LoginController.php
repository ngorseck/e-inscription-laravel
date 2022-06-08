<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
        return view('login');
    }
    public function logon (Request $request)
    {
        $email = $request->email;
        $pwd = $request->pass;

        echo $email;

        return $this->welcome ();
    }

    public function welcome ()
    {
        return view('welcome');
    }
}
