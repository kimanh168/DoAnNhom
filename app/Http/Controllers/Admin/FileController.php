<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    //Hiển thị trang file
    function file(){
        return view('admin.file');
    }

    function upload(HttpRequest $reg){
        if($reg -> hasFile('file')){
            $name = $reg -> file -> getClientOriginalname();
            $reg -> file ->move('/public/img/',$name);
        }

        return redirect()-> back();
    }
}
?>