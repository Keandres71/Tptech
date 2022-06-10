<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        $usuario = User::all();
        return view('Adminlte.usuarios.index')->with('usuarios',$usuario);
    }
    public function create2(){

        //$usuarios = User::all();
        return view('Adminlte.usuarios.create');
    }

    public function create(){
        return view('usuarios.create');
    }
    public function store2(Request $request){
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'tipo_doc'=>'required',
            'num_doc'=>'required',
            'fecha_nac'=>'required',
            'email'=>'required',
            'contraseña'=>'required'
        ]);

        $usuario = new User();
        
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->tipo_doc = $request->tipo_doc;
        $usuario->num_doc = $request->num_doc;
        $usuario->fecha_nac = $request->fecha_nac;
        $usuario->email = $request->email;
        $usuario->contraseña = $request->contraseña;
    
        $usuario->save();
        
        return redirect()->route('adminlte.index');
        
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

        $usuario = new User();
        
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

    public function show(User $usuario){
        
        return view('usuarios.show', compact('usuario'));
    }
    
    public function edit(User $usuario){
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request , User $usuario){
        
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'tipo_doc'=>'required',
            'num_doc'=>'required',
            'email'=>'required',
            'contraseña'=>'required'
        ]);

        $usuario = new User();
        
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

    public function destroy(User $usuario){
        $usuario->delete();
        return redirect()->route('/');
    }


    public function login(){
        return view('usuarios.login');
    }
}
