<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function register(Request $request){


        $user = new User();

        $user->nombre = $user->nombre;
        $user->apellido = $user->apellido;
        $user->password = hash::make($user->password);
        $user->correo =$user->correo;
        $user->save();

        Auth::login($user);
        return redirect()->route('hola');
    }

    public function loginVerify (Request $request){
        
        
        // dd($request->all());
        
        $credenciales = [
                'correo' => $request->correo,
                'password' => $request->password
        ];
        
        // $remember = ($request->has('remember') ? true : false);
        if(Auth::attempt($credenciales)){
            // $request-> session()->regenerate();
            return redirect()->intended(route('hola'));
        }
        else{
            return $request;
        }
    }

    public function crear(){

        $user = new User();

        $user->nombre = 'asd';
        $user->apellido = 'asd';
        $user->password = hash::make('asd');
        $user->correo = 'asd@asd';
        $user->save();

        Auth::login($user);
        return redirect()->route('hola');
    }
}
