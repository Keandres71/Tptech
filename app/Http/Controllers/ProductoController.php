<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::paginate(5);
        return view('Adminlte.productos.index')
            ->with('productos', $producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Adminlte.productos.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'idcag' => 'required|max:15',
            'idpro' => 'required|max:20',
            'nombre' => 'required|max:50',
            'descripcion' => 'required|max:255',
            'val_unit' => 'required|gte:100000'
        ]);
        $producto = Producto::create($request->only('idcag', 'idpro', 'nombre', 'descripcion', 'val_unit'));

        Session::flash('mensaje', 'El registro del producto se creo con exito.');

        return redirect()->route('Adminlte/productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('Adminlte.productos.form')
            ->with('producto', $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        if (isset($request['active'])) {

            $request->validate([
                'active' => 'required|gte:0'
            ]);

            $producto->active = $request['active'];
            $producto->save();

            Session::flash('mensaje', 'Estatus del producto modificado con exito.');

            return redirect()->route('Adminlte/productos.index');
        } else {
            $request->validate([
                'idcag' => 'required|max:15',
                'idpro' => 'required|max:15',
                'nombre' => 'required|max:50',
                'descripcion' => 'required|max:255',
                'val_unit' => 'required|max:50'
            ]);

            $producto->idcag = $request['idcag'];
            $producto->idpro = $request['idpro'];
            $producto->nombre = $request['nombre'];
            $producto->descripcion = $request['descripcion'];
            $producto->val_unit = $request['val_unit'];
            $producto->save();

            Session::flash('mensaje', 'Producto editado con exito.');

            return redirect()->route('Adminlte/productos.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        Session::flash('mensaje', 'Producto Eliminado con Exito.');

        return redirect()->route('Adminlte/productos.index');
    }
}
