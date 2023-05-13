<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order as Order;
class InsertCartController extends Controller
{
    function insert(Request $request){
        
        $order  = new Order();
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->price = $request->price;
        $a = $order->quantity;
        $order->quantity = $a+1;
        $order->save();
    }
}
