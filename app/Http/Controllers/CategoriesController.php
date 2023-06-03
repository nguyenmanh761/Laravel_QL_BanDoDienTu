<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as Category;
use App\Models\Product as Product;

class CategoriesController extends Controller
{
    public function index()
    {   
        $products = Product::all()->take(20);

        return view('categories.index', ['products'=>$products]);
    }

    public function index2($category_id)
    {
        $products = Product::where('category_id', $category_id)->get();
        return view('categories.index', ['products'=>$products]);
    }
}
