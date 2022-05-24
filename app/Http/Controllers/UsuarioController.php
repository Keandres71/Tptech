<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return view('usuarios/index');
    }

    public function store(){
        return view('usuarios/create');
    }

    public function login(){
        return view('usuarios.login');
    }
}
