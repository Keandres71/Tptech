<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriaController extends Controller
{
    public function index()
    {
        $i=1;
        $categorias = Categoria::paginate();
        return view('Adminlte.categorias.index',compact('categorias','i'));
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

        return redirect()->route('AdminLte/categorias.index')
            ->with('success', 'La categoria se creo correctamente.');
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

        return redirect()->route('AdminLte/categorias.index')
            ->with('success', 'La categoria se actualizo correctamente.');
    }


    public function destroy(Categoria $categoria){

        $productos = Producto::where('idcag','=',$categoria->id)->get();

        if(count($productos) != 0){
            return redirect()->route('AdminLte/categorias.index')
                ->with('error', 'Esta categoria contiene productos, no se puede eliminar.');
        }else {
            $categoria->delete();
            return redirect()->route('AdminLte/categorias.index')
                ->with('success', 'La categoria se elimino correctamente.');
        }

    }
}
