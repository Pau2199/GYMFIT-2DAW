<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock;
class StockController extends Controller
{
    public function modificarDatosStock($id, $valorNuevo, $columna){
        $stock = new Stock;
        $stock = Stock::find($id);
        $stock->$columna = $valorNuevo;
        $stock->save();
    }
}
