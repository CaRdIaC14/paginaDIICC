<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    public function register(Request $request){


        $user = new Usuario();

        $user->nombre = $request->name;
        $user->apellido = $request->apellido;
        $user->password = hash::make($request->password);
        $user->correo = $request->correo;
        $user->save();

        Auth::login($user);
        return redirect()->route('hola');
    }

    public function login (Request $request){
        
        return redirect()->route('hola');
        // $credenciales = [
        //         'email' => $request->correo,
        //         'password' => $request->password
        // ];
        // if(Auth::attempt($credenciales)){
        //     $request-> session()->regenerate();
        //     return redirect()->intended(route('hola'));
        // }
    }

    public function logout (Request $request){
        echo $request;
    }
}