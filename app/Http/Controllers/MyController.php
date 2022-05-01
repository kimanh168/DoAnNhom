<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class MyController extends Controller
{
    //
   

    function goto($id){
        return view($id);
    }
    
    // public function getProductById($id)
    // {
    //     $protype = Protype::all();
    //     $product = Product::all();
    //     return view('menu',['dulieu'=>$protype,'data'=>$product]);
    // }
}
