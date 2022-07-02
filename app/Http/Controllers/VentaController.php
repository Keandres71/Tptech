<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Cart;
use Illuminate\Support\Facades\Auth;

/**
 * Class VentaController
 * @package App\Http\Controllers
 */
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::paginate();

        return view('venta.index', compact('ventas'))
            ->with('i', (request()->input('page', 1) - 1) * $ventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta = new Venta();
        return view('venta.create', compact('venta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // para el codigo
        $codigo = 10001;
        $ventas = Venta::count();
        $codigo += $ventas;
        $data = [
            'codigo' => $codigo,
            'iduser' => auth()->user()->id,
            'productos' => Cart::getContent(),
            'iva' => 19,
            'total' => Cart::getTotal(),
            'neto' => Cart::getSubTotal(),
            'metodo_pago' => 'Efectivo',
            'fecha_venta' => '2022-06-27',
        ];

        $venta = Venta::create($data);

        return redirect()->route('factura.venta', $venta);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $venta = Venta::find($id)->delete();

        return redirect()->route('AdminLte.ventas.index')
            ->with('success', 'Venta eliminada correctamente.');
    }

    public function generarPDFRango(Request $request){

        $i = 0;

        if($request['fechaInicial'] == null) $ventas = Venta::orderBy('id', 'asc')->get();
        else if($request['fechaInicial'] == $request['fechaFinal'])$ventas = Venta::where('fecha_venta','LIKE','%'.$request['fechaFinal'].'%')->get();
        else $ventas = Venta::whereBetween('fecha_venta',[$request['fechaInicial'],$request['fechaFinal']])->get();
        //Generar PDF
        $pdf = PDF::loadview('venta.show', compact('ventas','i'));
        return $pdf->stream('reporte.pdf');
    }

    public function generarPDFFactura(Venta $venta){
        $i = 0;
        //Generar PDF
        $pdf = PDF::loadview('venta.factura', compact('venta','i'));
        return $pdf->stream('reporte.pdf');
    }

}
