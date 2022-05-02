<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //Hiển thị 5 sản phẩm
    function index(){
        $product = Product::paginate(5); //SELECT * FROM Product limit(0,5)
        //return view('index',['data'=>$product]);
        return view('/admin/products',['data'=>$product]);
    }

    //Sửa sản phẩm
    function edit($id)
    {
        $modal = Product::find($id);
        dd($modal);
        die;
        return view('/admin/edit');
    }

    //xóa sản phẩm:
    function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back(); //Quay lại trang trước đó
    }

    //Thêm sản phẩm:
    function add()
    {
        $protype = Protype::all();
        return view('/admin/add',['allprotype'=>$protype]);
    }

    //Post thêm sản phâm lên:
    function post_add(Request $request){
        $this->validate($request,[
            'product_name' => 'required',
            'price' => 'required|min:0|not_in:0'
        ],[
            'product_name.required' => 'Tên sản phẩm không được để trống',
            'product_name.unique' => 'Tên sản phẩm đã có trong CSDL',
        ]);
        Product::create($request->all());
        return redirect()->route('products');
    }
}
