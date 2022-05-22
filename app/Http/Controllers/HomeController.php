<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Customer;
use Auth;
use Mail;

class HomeController extends Controller
{
    //Hiển thị trang chủ
    function index(){
        $product = Product::limit(10)->orderby('id','DESC')->get();
        $protype = Protype::all();
        //return view('index',['data'=>$product]);
        return view('home.index',['data'=>$product,'dulieu'=>$protype]);
    }

    //Hiển thị sản phẩm theo loại ra trang menu
    function productByType($typeid){
        $protype = Protype::all();
        $sp_theoloai = Product::where('type_id',$typeid)->paginate(6);
        return view('home.menu',['dulieu'=>$protype,'sp_theoloai'=> $sp_theoloai]);
    }

    //Hiển thị tất cả sản phẩm ra trang menu
    function getAllProductMenu(){
        $product = Product::paginate(6); //SELECT * FROM Product limit(0,5)
        $protype = Protype::all();
        return view('home.menu',['dulieu'=>$protype,'tatcasp' => $product]);
    }

    //Hiển thị chi tiết sp:
    function chitietsp($id)
    {
        $protype = Protype::all();
        $modal = Product::find($id);
        return view('home.thongtinsp',['dulieu'=>$protype,'thongtinsp'=>$modal]);
    }
    //Hiển thị about:
    function about(){
            $protype = Protype::all();
            return view('home.about',['dulieu'=>$protype]);
    }
    //Hiển thị team:
    function team(){
            $protype = Protype::all();
            return view('home.team',['dulieu'=>$protype]);
    }
    //Hiển thị contact:
    function contact(){
            $protype = Protype::all();
            return view('home.contact',['dulieu'=>$protype]);
    }

    //Gửi contact:
    function post_contact(Request $request){
        Mail::send('email.contact',[
            'name' => $request->name,
            'content' => $request->content,
            'email' => $request->email,
        ],function($mail) use($request){
            $mail->to('deliciouscakesy@gmail.com',$request->name);
            $mail->from($request->email);
            $mail->subject($request->subject);
        });
        return redirect()->route('contact')->with('success','Gửi mail thành công');
    }

    //Tìm kiếm sp
    public function update(){
        $key = request()->key ? request()->key : '';
        $search = Product::where('product_name', 'Like', '%' . $key . '%')->get();
        return view('home.timkiemsp',['search'=>$search]);
    }

    //Thoát
    public function logout(){
        Auth::guard('cus')->logout();
        return redirect()->route('home.index');
    }

    //Hiển thị trang Đăng nhập
    public function login(){
        return view('home.login');
    }

    //Kiểm tra và tiến hành đăng nhập
    public function post_login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Vui lòng nhập địa chỉ email',
            'password.required' => 'Vui lòng nhập mật khẩu'
        ]);

        if(Auth::guard('cus')->attempt($req->only('email','password'))){
            if(Auth::guard('cus')->user()->status == 0){
                Auth::guard('cus')->logout();
                return redirect()->route('home.login')->with('error','Tài khoản của bạn chưa được kích hoạt');
            }
            return redirect()->route('home.index');
        }
        else{
            return redirect()->back()->with('error','Sai email hoặc password');
        }
       
    }

    //Đăng kí tài khoản
    public function register(){
        return view('home.register');
    }

    //Kiểm tra và tiến hành tạo tài khoản
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
            $token = strtoupper( random_int(1000000000,9999999999));
            $password_h = bcrypt($request->password);
            $data = $request->only('customer_name','email','password','phone','address');
            $data['password'] = $password_h;
            $data['token'] = $token;   
            if($customer = Customer::create($data)){
                Mail::send('email.active_account',compact('customer'),
                    function($mail) use ($customer){
                        $mail->to($customer->email,$customer->customer_name);
                        $mail->from('deliciouscakesy@gmail.com');
                        $mail->subject('Delicious Cake - Xác nhận tài khoản');
                    });
                    return redirect()->route('home.login')->with('success','Đăng kí tài khoản thành công vui lòng xác nhận email');
            }
            return redirect()->back();
    }

    //Kích hoạt tài khoản
    public function actived (Customer $customer,$token){
        if($customer->token === $token){
            $customer->update(['status'=>1,'token' => null]);
            return redirect()->route('home.login')->with('success','Xác nhận tài khoản thành công');
        }
        else{
            return redirect()->route('home.login')->with('error','Xác nhận tài khoản thất bại');
        }
    }
}
