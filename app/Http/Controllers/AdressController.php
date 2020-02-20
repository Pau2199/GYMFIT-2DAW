<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Adress;
use App\User;
use DB;

class AdressController extends Controller
{

    public function crearDireccion($array){
        $array = json_decode($array);

        $adress = new Adress;
        $adress->user_id = auth()->id();
        $adress->type_way = $array->via;
        $adress->name = $array->nombreVia;
        $adress->location = $array->localidad;
        $adress->country = $array->provincia;
        $adress->number = $array->numero;
        $adress->door = $array->puerta;
        $adress->postal_code = $array->cp;
        $adress->floo = $array->piso;
        $adress->type = "delivery_adress";
        $adress->save();

        $user = User::find(auth()->id());
        $user->name = $array->nombre;
        $user->firts_surname = $array->apellido1;
        $user->second_surname = $array->apellido2;
        $user->email = $array->email;
        $user->date_birth = $array->fecha;
        $user->save();

    }


    public function modificar($datoNuevo, $columna){
        $address = DB::select('SELECT id FROM address WHERE user_id = '.auth()->id());
        $address = Adress::find($address[0]->id);
        $address->$columna = $datoNuevo;
        $address->save();

    }

}
