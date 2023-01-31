<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIProductController extends Controller
{
    //
    public function products(){
 
        return "Les produits";        

    }

    public function product($id){
        return "Vous avez un produit qui a pour id =" . $id;
    }
}
