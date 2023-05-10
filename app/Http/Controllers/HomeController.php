<?php

namespace App\Http\Controllers;
use App\Models\Product as Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all()->take(4);
        return view('home.index', ['products'=>$products]);
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::all()->take(6);
        return view('home.infor', ['products'=>$products,'product'=>$product]);
    }
}
