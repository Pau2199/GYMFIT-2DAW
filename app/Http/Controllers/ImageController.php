<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Image;

class ImageController extends Controller
{
    public function obtenerRutas($id){
        return $rutas = DB::table('images')->select('ruta')->where('idProducto', $id)->get();
    }
}
