<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriaController extends Controller
{
    public function index()

    {
        $categoria = Categoria::paginate(5);
        return view('Adminlte.categorias.index')
        ->with('categorias', $categoria);
    }

 
    public function create()
    {
        return view('Adminlte.categorias.form');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|max:15',
            'tipo' => 'required'
        ]);
        $categoria = Categoria::create($request->only('id', 'tipo'));

        Session::flash('mensaje', 'La Categoria se creo con exito.');

        return redirect()->route('AdminLte/categorias.index');
    }

  
    public function show(Categoria $categoria)
    {
    }

    public function edit(Categoria $categoria)
    {
        return view('Adminlte.categorias.form')
        ->with('categoria', $categoria);
    }


    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'id' => 'required|max:15',
            'tipo' => 'required'
        ]);
        $categoria->id = $request['id'];
        $categoria->tipo = $request['tipo'];
        $categoria->save();

        Session::flash('mensaje', 'La Categoria se Modifico con exito.');

        return redirect()->route('AdminLte/categorias.index');
    }


    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        Session::flash('mensaje', 'registro Eliminado con Exito.');

        return redirect()->route('AdminLte/categorias.index');
    }
}
