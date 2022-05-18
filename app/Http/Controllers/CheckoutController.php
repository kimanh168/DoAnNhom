<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protype;

class CheckoutController extends Controller
{
    public function __construct(){
        $this->middleware('cus');
    }

    //
    public function form(){
        $protype = Protype::all();
        return view('checkout',['dulieu'=>$protype]);
    }
    
    public function submit_form(){
        $protype = Protype::all();
        return view('checkout',['dulieu'=>$protype]);
    }
}
