<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\User;
use App\Adress;
use App\Order;

class UserController extends Controller
{

    public function perfil(){

        return view('vistaperfil');

    }

    public function verPerfil(){

        $id = auth()->id();
        $datos = User::find($id);
        $direccion = Adress::all()->where('user_id', '=' , $id);
        $pedidos = Order::all()->where('idUsuario', '=' , $id);
        return array($datos, $direccion, $pedidos);

    }

    public function borrar(){

        $user = User::find(auth()->id());

        $user->delete();
    }

}
