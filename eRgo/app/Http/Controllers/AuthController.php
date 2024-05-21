<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar(){
        return view('page/register');
    }

    public function welcome(Request $request){
        
        $name = $request->input('name');
        $lastName = $request->input('lastName');
        return view('page/welcome', ['name' => $name , 'lastName' => $lastName]);
    }
}

