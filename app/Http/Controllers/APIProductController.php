<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class APIProductController extends Controller
{
    //
    public function products(){
 
        $products = Product::all();

        return $products;        

    }

    public function product($id){
        $product = Product::find($id);
        return $product;
    }

    public function store(Request $request){

        $product = Product::where('id',$request->productId )->first();

        return $product;

    }
}
