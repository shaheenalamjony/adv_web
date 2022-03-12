<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginIndex(){
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            
            'email' => 'required|email',
            'password' => 'required',
            
        ]);
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";

        $email = $request->input('email');
        $password = $request->input('password');

        if($email == "shaheenalamjony@gmail.com" && $password=="123")
        {
            return view('home');
        }
        else
        {
            echo "invalid";
        }
    }
}
