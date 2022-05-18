<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FileController;
use App\Helper\CartHelper;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[HomeController::class,'index'])->name('home.index');

// Dẫn tới trang đăng ký custommer
Route::get('home-register',[HomeController::class,'register'])->name('home.register');
Route::post('home-register',[HomeController::class,'post_register'])->name('home.register');

// Dẫn tới trang đăng nhập custommer
Route::get('home-login',[HomeController::class,'login'])->name('home.login');
Route::post('home-login',[HomeController::class,'post_login'])->name('home.login');
// Thoát custommer
Route::get('home-logout',[HomeController::class,'logout'])->name('home.logout');

//Dẫn tới trang Menu
Route::get('menu',[HomeController::class,'getAllProductMenu'])->name('menu');
Route::get('menu/{type_id?}',[HomeController::class,'productByType'])->name('menu.id');

// Dẫn tới trang About us
Route::get('about',[HomeController::class,'about'])->name('about');

// Dẫn tới trang Team
Route::get('team',[HomeController::class,'team'])->name('team');

// Dẫn tới trang Contact
Route::get('contact',[HomeController::class,'contact'])->name('contact');

// Dẫn tới trang thông tin sp
Route::get('thongtinsp/{id?}',[HomeController::class,'chitietsp'])->name('thongtinsp');

// Dẫn tới trang Đăng Nhập
Route::get('/register', function () {return view('/auth/register');})->name('register');

// Dẫn tới trang Đăng Ký
Route::get('/login', function () {return view('/auth/login');})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
    include 'protype.php';
    include 'product.php';
    Route::get('/file',[FileController::class,'file'])->name('file');
    Route::post('/file',[FileController::class,'upload'])->name('file');
});

Route::group(['prefix' => 'cart'],function(){
    Route::get('view',[CartController::class,'view'])->name('cart.view');
    Route::get('add/{id}/{quantity?}',[CartController::class,'add'])->name('cart.add');
    Route::get('remove/{id}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('update/{id}/{quantity?}',[CartController::class,'update'])->name('cart.update');
});

Route::group(['prefix' => 'checkout'],function(){
    Route::get('view',[CheckoutController::class,'form'])->name('checkout');
    Route::post('view',[CheckoutController::class,'submit_form'])->name('checkout');
});
