<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email' , 'password');

        if (Auth::attempt($credentials)){
            
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request,$user);
        } return 'negativo civil';
    }

    public function authenticated(Request $request, $user){
        return redirect()->route('welcome');
    }
    
}
