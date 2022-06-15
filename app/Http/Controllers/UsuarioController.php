<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    public function index(){

        $usuario = User::paginate(10);
        return view('Adminlte.usuarios.index')
        ->with('usuarios',$usuario);
    }

    public function create(){
        return view('Adminlte.usuarios.form');
    }


    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'apellido'=>'required',
            'tipo_doc'=>'required',
            'num_doc'=>'required',
            'fecha_nac'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $usuario = User::create($request->only('name', 'apellido', 'tipo_doc', 'num_doc', 'fecha_nac', 'email','password'));

        Session::flash('mensaje', 'Usuario creado con exito');
        return redirect()->route('usuarios.index');
        
    }

    public function show(User $usuario){
        
        return view('usuarios.show', compact('usuario'));
    }
    
    public function edit(User $usuario){
        return view('Adminlte.usuarios.form')
        ->with('usuario', $usuario);
    }

    public function update(Request $request , User $usuario){
        
        $request->validate([
            'name'=>'required',
            'apellido'=>'required',
            'tipo_doc'=>'required',
            'num_doc'=>'required',
            'email'=>'required',
            
        ]);

        $usuario->name = $request['name'];
        $usuario->apellido = $request['apellido'];
        $usuario->email = $request['email'];
        $usuario->fecha_nac = $request['fecha_nac'];
        $usuario->tipo_doc = $request['tipo_doc'];
        $usuario->num_doc = $request['num_doc'];
        $usuario->tel = $request['tel'];
        $usuario->ciudad = $request['ciudad'];
        $usuario->dire = $request['dire'];
        $usuario->password = $request['password'];
    
        $usuario->save();

        Session::flash('mensaje', 'Editado con exito');
        
        return redirect()->route('usuarios.index');
    }

    public function destroy(User $usuario){
        $usuario->delete();
        Session::flash('mensaje', 'usuario eliminado');
        return redirect()->route('usuarios.index');
    }

}
