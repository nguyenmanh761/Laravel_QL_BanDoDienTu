<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product as Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();

       return response()->json($product, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->style_id = $request->style_id;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->partner_id = $request->partner_id;
        $product->text = $request->text;

        $product->save();
       
        return response()->json($product, 201);
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
        $product = Product::findOrFail($id);

        return response()->json($product, 201);
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
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->style_id = $request->style_id;
        $product->size = $request->size;
        $product->weight = $request->weight;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->partner_id = $request->partner_id;
        $product->text = $request->text;

        $product->save();

        return response()->json($id,200);
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
        $product = Product::findOrFail($id);
        $product->delete();
        

        return response()->json($id,200);
    }
}
