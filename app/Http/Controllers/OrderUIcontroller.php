<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order as Order;
use App\Models\Product as Product;
use App\Http\Controllers\CartController;

use Auth;
class OrderUIcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //kiểm tra hàng đã có trong giỏ hay chưa
        $check = Order::where('user_id', Auth::user()->id)
        ->Where('product_id', $request->product_id)
        ->first();
        if($check){
            $x= $check->quantity;
            $check->quantity = $x +1;
            $check->save();
            //$this->edit(Auth::user()->id, $request->product_id);
            //$result = call([CartController::class, 'index']);
            return redirect()->action([CartController::class, 'index']);;
        }
        else{
            $order  = new Order();
            $order->user_id = Auth::user()->id;
            $order->product_id = $request->product_id;
            $product = Product::findOrFail($request->product_id)->first();
            $order->price = $product->price;
            $a = $order->quantity;
            $order->quantity = $a+1;
            $order->save();
            //$result = call([CartController::class, 'index']);
            return redirect()->action([CartController::class, 'index']);;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id, $product_id)
    {


        echo "bạn đã có sản phẩm này trong giỏ hàng!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
