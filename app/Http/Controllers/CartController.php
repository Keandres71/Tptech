<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        return view('venta.cart-venta', compact('i'));
    }

    public function addCart(Request $request)
    {
        $producto = Producto::find($request['i']);
        
        Cart::add(
            $producto->id,
            $producto->nombre,
            $producto->val_unit,
            1,
        );
        return redirect()->route('ver.carrito')->with('success', "$producto->nombre se ha agregado correctamente.");

    }
    public function clearCart()
    {
        Cart::clear();
        return redirect()->route('ver.carrito')->with('success', "Productos retirados correctamente.");
    }
    public function removeItemCart(Request $request)
    {
        Cart::remove($request['i']);
        return redirect()->route('ver.carrito')->with('success', "Producto retirado correctamente.");
    }

    // public function traeProductosCarrito(){
    //     $productos = [];
    //     foreach(Cart::getContent() as $item){
    //         array_push($productos, [
    //             'id' => $item['id'],
    //             'nombre' => $item['name'],
    //             'precio' => $item['price'],
    //             'cantidad' => $item['quantity'],
    //         ]);
    //     }
    //     echo json_decode($productos);
    //     // return response(json_encode($productos),200)->header('Content-type','text/plain');
    // }

}
