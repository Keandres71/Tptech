<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function NewPassword(){
        return view('EditProfile.editUser');
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

                    return redirect()->back()->with('updateClave', 'La clave fue cambiada correctamente');
                }else {
                    return redirect()->back()->with('La clave debe ser mayor a 8 digitos');
                }

            }else {
                return redirect()->back()->with('clave incorrecta', 'Las claves no coinciden');
            }

        }else {
            return back()->withErrors(['password_actual'=>'la clave no coincide']);
        }
    }else {
        $name = $request->name;
        $updateName = DB::table('users')
                    ->where("id", $user->id)
                    ->update(['name', $name]);
        return redirect()->back()->with('name', 'el nombre fue cambiado correctamente');
     }
}
}

