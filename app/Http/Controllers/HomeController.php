<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class HomeController extends Controller
{
    //Hiển thị trang chủ
    function index(){
        $product = Product::limit(10)->orderby('id','DESC')->get();
        $protype = Protype::all();
        //return view('index',['data'=>$product]);
        return view('index',['data'=>$product,'dulieu'=>$protype]);
    }

    //Hiển thị sản phẩm theo loại ra trang menu
    function productByType($typeid){
        $protype = Protype::all();
        $sp_theoloai = Product::where('type_id',$typeid)->paginate(6);
        return view('menu',['dulieu'=>$protype,'sp_theoloai'=> $sp_theoloai]);
    }

    //Hiển thị tất cả sản phẩm theo ra trang menu
    function getAllProductMenu(){
        $product = Product::paginate(6); //SELECT * FROM Product limit(0,5)
        $protype = Protype::all();
        return view('menu',['dulieu'=>$protype,'tatcasp' => $product]);
    }

    //Hiển thị chi tiết sp:
    function chitietsp($id)
    {
        $protype = Protype::all();
        $modal = Product::find($id);
        return view('thongtinsp',['dulieu'=>$protype,'thongtinsp'=>$modal]);
    }
    //Hiển thị about:
    function about(){
            $protype = Protype::all();
            return view('about',['dulieu'=>$protype]);
    }
    //Hiển thị team:
    function team(){
            $protype = Protype::all();
            return view('team',['dulieu'=>$protype]);
    }
    //Hiển thị contact:
    function contact(){
            $protype = Protype::all();
            return view('contact',['dulieu'=>$protype]);
    }

}
