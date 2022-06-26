<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditUserController extends Controller
{
    public Function NewProfile(){
        $usuario = User::find(Auth::user()->id);
        //dd($usuario);
        return view('EditProfile.editUser', compact('usuario')); 
    }

    public function changeProfile(Request $request){
        $usuario = User::find($request['id']);
        request()->validate(User::$rules);
        $usuario->update($request->all());
        return redirect()->back()->with('success', 'Perfil editado correctamente.');
    }

    public function NewPassword(){
        return view('EditProfile.editPassword');
    }

    public function changePassword(Request $request){
        $user = Auth::user();
        $userId = $user->id;
        $userEmail = $user->email;
        $userPassword = $user->password;

        if ($request->password_actual !="") {
            $NewPass = $request->password;
            $confirPass = $request->confirm_password;
            $name = $request->name;


            if (Hash::check($request->password_actual, $userPassword)) {
                if ($NewPass == $confirPass) {
                    
                
                
                    if (strlen($NewPass) >= 8) {
                        $user->password = Hash::make($request->password);
                        $sqlDB = DB::table('users')
                            ->where("id", $user->id)
                            ->update(['password' => $user->password], ['name' =>$user->name]);

                    return redirect()->back()->with('success', 'La clave fue cambiada correctamente');
                }else {
                    return redirect()->back()->with('error','La clave debe ser mayor a 8 digitos');
                }

            }else {
                return redirect()->back()->with('error', 'Las claves no coinciden');
            }

        }else {
            return back()->with('error','la clave actual no coincide');
        }
    }/* else {
        $name = $request->name;
        $updateName = DB::table('users')
                    ->where("id", $user->id)
                    ->update(['name', $name]);
        return redirect()->back()->with('name', 'el nombre fue cambiado correctamente');
     } */
}
}

