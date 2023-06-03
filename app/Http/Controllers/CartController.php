<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order as Order;
use App\Models\Product as Product;
use App\Models\Bills as Bills;
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

    public function writebill(){
        $cart = Order::where('user_id', Auth::user()->id)
                        ->get();
        $total = 0;
        for($i=0; $i<count($cart); $i++){
            $s =  $cart[$i]->quantity*$cart[$i]->price;
            $total +=$s;
        }
        
        $text = "";
        for($i=0; $i<count($cart); $i++){
            $product= Product::findOrFail($cart[$i]->product_id);
            if($product){
                $text .= " - Tên sản phẩm: ". $product->name."\n"."  Số lượng: ".$cart[$i]->quantity."  Đơn giá: ". $product->price . PHP_EOL;
            }
        }
        $tax = $total*0.03;
        $total = $total - $tax;
        $s=$total+$tax;
        $bill = new Bills();
        $bill->user_id = Auth::user()->id;
        $bill->text = $text. PHP_EOL . " - Thành tiền: ".$s."\n Thuế(3%): ".$tax."\n Tổng cộng: ".$total;
        $bill->save();
        return $this->index();
    }

    public function showbills(){
        $bills = Bills::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('cart.bill', ['bills'=>$bills]);
    } 
}
