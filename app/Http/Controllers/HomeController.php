<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Customer;
use Auth;

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

    //Hiển thị tất cả sản phẩm ra trang menu
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

    public function update(){
        $key = request()->key ? request()->key : '';
        $search = Product::where('product_name', 'Like', '%' . $key . '%')->get();
        return view('timkiemsp',['search'=>$search]);
    }

    public function logout(){
        Auth::guard('cus')->logout();
        return redirect()->route('home.index');
    }

    public function login(){
        return view('login');
    }

    public function post_login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'password.required' => 'Vui lòng nhập mật khẩu'
        ]);

        if(Auth::guard('cus')->attempt($req->only('email','password'),$req->has('remember'))){
            return redirect()->route('home.index');
        }
        return redirect()->back();
    }

    public function register(){
        return view('register');
    }

    public function post_register(Request $request){
            $this->validate($request,[
                'customer_name' => 'required',
                'email' => 'required|email|unique:customer,email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ],[
                'customer_name.required' => 'Tên người dùng không được để trống',
                'email.required' => 'Email không được để trống',
                'email.unique' => 'Email đã được sử dụng',
                'email.email' => 'Email phải đúng định dạng',
                'password.required' => 'Mật khẩu không được để trống',
                'confirm_password.required' => 'Xác nhận mật khẩu không được để trống',
                'confirm_password.same' => 'Nhập lại mật khẩu không chính xác'

            ]);
            $password = bcrypt($request->password);
            $request->merge(['password'=>$password]);
            Customer::create($request->all());
            return redirect()->route('home.login');
    }
}
