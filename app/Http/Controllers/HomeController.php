<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;

class HomeController extends Controller
{
    public function __invoke()
    {
        $productos = Producto::where('active','0')->paginate(5);

        return view('welcome',compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }


}

