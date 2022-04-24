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
        return view('index',['data'=>$product,'dulieu'=>$protype]);
    }

    function goto($id){
        return view($id);
    }
}
