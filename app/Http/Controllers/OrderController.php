<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function pedido($array){
       
        $precio = explode('€',$array);
        
        $order = new Order();
        $order->payment_methos = 'Tarjeta';
        $order->order_date = "2020/02/21";
        $order->full_price = 123;
        $order->idUsuario = auth()->id();
        $order->save();
        
    }
}
