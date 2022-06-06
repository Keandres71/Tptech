<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuario'));
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'tipo_doc'=>'required',
            'num_doc'=>'required',
            'fecha_nac'=>'required',
            'email'=>'required',
            'contraseña'=>'required'
        ]);

        $usuario = new Usuario();
        
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->tipo_doc = $request->tipo_doc;
        $usuario->num_doc = $request->num_doc;
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->email = $request->email;
        $usuario->contraseña = $request->contraseña;
    
        $usuario->save();
        
        return redirect()->route('usuarios.login');
        
    }

    public function show(Usuario $usuario){
        
        return view('usuarios.show', compact('usuario'));
    }
    
    public function edit(Usuario $usuario){
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request , Usuario $usuario){
        
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'tipo_doc'=>'required',
            'num_doc'=>'required',
            'email'=>'required',
            'contraseña'=>'required'
        ]);

        $usuario = new Usuario();
        
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->tipo_doc = $request->tipo_doc;
        $usuario->num_doc = $request->num_doc;
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->email = $request->email;
        $usuario->contraseña = $request->contraseña;
    
        $usuario->save();

        
        return redirect()->route('usuarios.show',$usuario);
    }

    public function destroy(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('/');
    }


    public function login(){
        return view('usuarios.login');
    }
}
