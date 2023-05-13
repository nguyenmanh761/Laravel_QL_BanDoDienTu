<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order as Order;
use App\Models\Product as Product;
use Auth;
class CartController extends Controller
{
    public function index()
    {

        $carts = Order::Where('user_id', Auth::user()->id)->get();
        return view('cart.index', ['carts'=>$carts]);
    }

    public function destroy($id){
        $cart = Order::Where('user_id', Auth::user()->id)->where('product_id',$id)->delete();
        return $this->index();
    }

    public function update(Request $request){
        $cart = Order::where('user_id', Auth::user()->id)
                        ->where('product_id', $request->product_id)
                        ->first();
        if ($cart) {
            Order::where('user_id',  Auth::user()->id)
            ->where('product_id', $request->product_id)
            ->update(['quantity' => $request->quantity]);

            return $this->index();
        }

        return response()->json(['success' => false, 'message' => 'Cart not found.']);
    }
}
