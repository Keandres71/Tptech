<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'apellido'=>'required',
            'tipo_doc'=>'required',
            'num_doc'=>'required',
            'fecha_nac'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required'
        ]);

        $usuario = User::create($request->only('name', 'apellido', 'tipo_doc', 'num_doc', 'fecha_nac', 'email','password','password_confirmation'));

    }
}
