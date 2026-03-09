<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function mostrarLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $usuario = $request->usuario;
        $password = $request->password;

        if ($usuario == "admin" && $password == "1234") {
            return "Login correcto";
        }

        return "Usuario o contraseña incorrectos";
    }
}