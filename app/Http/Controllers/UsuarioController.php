<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){ //METODO PAGINA PRINCIPAL
        
        return view('usuarios.index');
    
    }

    public function create(){ // METODO PARA CREAR USUARIO
        return view('usuarios.create');
    }

    public function show($usuario){ //METODO PARA MOSTRAR USUARIO EN ESPECIFICO
        return view('usuarios.show', compact('usuario'));
    }
}
