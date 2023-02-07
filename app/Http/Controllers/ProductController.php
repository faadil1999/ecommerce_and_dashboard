<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function add_product(){
        return view("admin.add_product");
    }

    public function store(Request $request){

    }

    public function index()
    {
        $products = Product::all();

        return view('products.index');
    }

}
