<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    
    public function crearDireccion(Request $request){
        
        $adress = new Adress;
        $adress->type_way = $request
        
    }
    
}
