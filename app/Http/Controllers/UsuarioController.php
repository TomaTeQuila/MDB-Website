<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login', 'logout', 'store']);
    }


    public function login(Request $req) {
        $username = $req->username;
        $password = $req->password1;

        if(Auth::attempt(['username'=> $username, 'password'=> $password])) {
            return redirect()->route('hub.index');
        }

        return back()->withErrors([
            'username' => 'Credenciales incorrectas',
        ])->onlyInput('username');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('hub.index');
    }
    public function store(UsuarioRequest $request){
        $usuario = new Usuario();

        $usuario->email = $request->email;
        $usuario->username = $request->username;
        // if($request->password1 != $request->password2){
        //     return back()->withErrors([
        //         'contraseña_distinta' => 'Las contraseñas no coinciden',
        //     ]);
        // }
        $usuario->password = Hash::make($request->password1);
        $usuario->rol_id = 0;
        $usuario->save();
        return redirect()->route('auth.index');
    }
}
