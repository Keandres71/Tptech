<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Traits\Template;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    use Template;

    private $name = 'productos';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(5);

        return view('AdminLte.producto.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $categorias = Categoria::pluck('tipo','id');
        $proveedores = Proveedor::pluck('nit','id');
        return view('AdminLte.producto.create', compact('producto','proveedores','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $data = $request->except('_token','_method');

        if(isset($data['imagen'])){
            $data['imagen'] = ProductoController::moveImage($request, $this->name);
        }

        $producto = Producto::create($data);

        return redirect()->route('AdminLte.productos.index')
            ->with('success', 'Producto creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('AdminLte.producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::pluck('tipo','id');
        $proveedores = Proveedor::pluck('nit','id');

        return view('AdminLte.producto.edit', compact('producto','proveedores','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $data = $request->except('_token','_method');

        if(isset($data['imagen'])){
            $data['imagen'] = ProductoController::moveImage($request, $this->name);
        }

        $producto->update($data);

        return redirect()->route('AdminLte.productos.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('AdminLte.productos.index')
            ->with('success', 'Producto eliminado correctamente.');
    }

    public function activarProducto(Request $request){
        $mensaje = '';
        $producto = Producto::find($request['i']);
        $producto->active = $request['active'];
        $producto->update();
        if($producto->active == 1){
            $mensaje = 'Producto activado correctamente.';
        }else{
            $mensaje = 'Producto desactivado correctamente.';
        }
        return redirect()->route('AdminLte.productos.index')
            ->with('success', $mensaje);
    }

}
