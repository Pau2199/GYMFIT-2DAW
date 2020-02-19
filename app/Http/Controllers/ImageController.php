<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Image;
use App\Stock;

class ImageController extends Controller
{
    public function obtenerMasInfo($id){
        $rutaImagenes = DB::table('images')->select('ruta')->where('idProducto', $id)->get();
        $stock = Stock::all()->where('idProducto', '=', $id);
        return array($rutaImagenes, $stock);
    }
}
