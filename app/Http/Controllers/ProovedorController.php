<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProovedorController extends Controller
{
    public function index(){
        return view('Adminlte.proovedores.index');
    }

    public function store(){
        return view('Adminlte.proovedores.create');
    }
}
