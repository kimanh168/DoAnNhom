<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class MyController extends Controller
{
    //
    function index(){
        $product = Product::all();
        $protype = Protype::all();
        //return view('index',['data'=>$product]);
        return view('index',['data'=>$product,'dulieu'=>$protype]);
    }

    function goto($id){
        return view($id);
    }
    function getAllProduct(){
        $product = Product::all();
        $protype = Protype::all();
        return view('menu',['dulieu'=>$protype,'data'=>$product]);
    }
    // public function getProductById($id)
    // {
    //     $protype = Protype::all();
    //     $product = Product::all();
    //     return view('menu',['dulieu'=>$protype,'data'=>$product]);
    // }
}
