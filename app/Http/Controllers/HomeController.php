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

    //Hiển thị sản phẩm theo loại
    function productByType($typeid){
        $protype = Protype::all();
        $sp_theoloai = Product::where('type_id',$typeid) -> get();
        return view('menu',['dulieu'=>$protype,'sp_theoloai' => $sp_theoloai]);
    }
    //Hien thi theo loại sản phẩm:
    function getProductByType($id)
    {
        $product = Product::all();
        $protype = Protype::all();
        $typebyid = Protype::find($id);
        return view('index',['typebyid'=>$typebyid]);
    }

    //Hiển thị chi tiết sp:
    function chitietsp($id)
    {
        $protype = Protype::all();
        $modal = Product::find($id);
        return view('thongtinsp',['dulieu'=>$protype,'thongtinsp'=>$modal]);
    }
}
