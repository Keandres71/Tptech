<?php
namespace App\Traits;
use Illuminate\Http\Request;

trait Template{

    //Agregar una imagen
    public function moveImage(Request $request, $name){

        if($request->hasFile("imagen")){
            $image = $request->file('imagen');
            $nameImagen = time().'.'.$image->guessExtension();
            $route = public_path('img/'.$name.'/');
            $image->move($route, $nameImagen);
            return 'img/'.$name.'/'.$nameImagen;
        }else{
            return 'NULL';
        }

    }

}
