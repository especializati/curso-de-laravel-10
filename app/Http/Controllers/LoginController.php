<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\auth;

class LoginController extends Controller
{
public function auth(Request $request){
    $credenciais=$request->validade([
        'email'=>['required','email'],
        'password'=>['required'],
    ]);
    if(auth:attempt($credenciais)){
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    } else {
        return redirect()->back()->with('erro','email ou senha invalida');
    }
  

}

}
