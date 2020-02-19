<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Adress;

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
        $adress->postal_code = $array->cp;
        $adress->floo = $array->piso;
        $adress->type = "delivery_adress";
        $adress->save();
        var_dump($array);

    }

}
