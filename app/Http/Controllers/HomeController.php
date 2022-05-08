<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class HomeController extends Controller
{
    //Hiển thị trang chủ
    function index(){
        $product = Product::all();
        $protype = Protype::all();
        //return view('index',['data'=>$product]);
        return view('index',['data'=>$product,'dulieu'=>$protype]);
    }

    //Hiển thị menu
    function menu(){
        $product = Product::all();
        $protype = Protype::all();
        return view('menu',['dulieu'=>$protype,'data'=>$product]);
    }
        //Hien thi theo loại sản phẩm:
        function getProductByType($id)
        {
            $product = Product::all();
            $protype = Protype::all();
            $typebyid = Protype::find($id);
            return view('index',['typebyid'=>$typebyid]);
        }
}
