<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Product;
class SearchController extends Controller
{
    function index(){
        $products = Product::inRandomOrder()->take(12)->get();
        return view('search.index', ['products'=>$products]);
    }

    function searched(Request $request){
        $keyword= $request->input('keyword');
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')
        ->get();

        return view('search.index', ['products'=>$products]);
    }
}
