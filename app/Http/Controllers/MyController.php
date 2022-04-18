<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class MyController extends Controller
{
    //
    function index(){
        return view('index');
    }

    function goto($id){
        return view($id);
    }
    function getAllProduct(){
        $product = Product::all();
        return view('index',['data'=>$product]);
    }
}
