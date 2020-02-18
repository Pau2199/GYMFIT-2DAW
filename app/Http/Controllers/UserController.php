<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;

class UserController extends Controller
{

    public function perfil(){

        return view('vistaperfil');

    }

    public function rellenarPerfil(){

        $datos = User::find(auth()->id());
        return $datos;

    }

    public function verPerfil(){

        $datos = User::find(auth()->id());
        return $datos;

    }

}
