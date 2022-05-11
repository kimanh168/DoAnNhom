<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Protype;
use App\Http\Controllers\Controller;

class ProtypeController extends Controller
{
    //Hiển thị loại sản phẩm
    function index(){
        $protype = Protype::all(); //SELECT * FROM Protype
        return view('/admin/protypes',['data'=>$protype]);
    }


    //Thêm loại sản phẩm:
    function addprotypes()
    {
        return view('/admin/addprotypes');
    }

    //Post thêm loại sản phâm lên:
    function post_addtype(Request $request){
        $this -> validate($request,[
            'type_name' => 'required|unique:protypes,type_name'
        ],['type_name.required' => 'Tên danh mục không được để trống'
        , 'type_name.unique' => 'Tên danh mục đã có trong CSDL'
        ]);
        Protype::create($request->all());
        return redirect()->route('protypes');
    }

    //xóa loại sản phẩm:
    function deletetype($id)
    {
        Protype::find($id)->delete();
        return redirect()->back(); //Quay lại trang trước đó
    }

    //Sửa loại sản phẩm:
    function edittype($id)
    {
        $typebyid = Protype::find($id);
        return view('/admin/edittype',['typebyid'=>$typebyid]);
    }

    //Post sửa loại sản phâm lên:
    function post_edittype($id,Request $request){
        $request -> offsetUnset('_token');
        Protype::where(['id'=>$id])->update($request->all());
        return redirect()->route('protypes');
    }
}