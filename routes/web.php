<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FileController;
use App\Helper\CartHelper;
use App\Http\Controllers\CartController;
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

//Menu
Route::get('menu',[HomeController::class,'getAllProductMenu'])->name('menu');
Route::get('menu/{type_id?}',[HomeController::class,'productByType'])->name('menu.id');

//Route::get('/{id}',[MyController::class,'goto']);
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
    // Route::get('/register', function () {return view('/auth/register');})->name('register');
    // Route::get('/login', function () {return view('/auth/login');})->name('login');

    include 'protype.php';
    include 'product.php';
    Route::get('/file',[FileController::class,'file'])->name('file');
    Route::post('/file',[FileController::class,'upload'])->name('file');
});

Route::group(['prefix' => 'cart'],function(){
    Route::get('view',[CartController::class,'view'])->name('cart.view');
    Route::get('add/{id}',[CartController::class,'add'])->name('cart.add');
    Route::get('remove/{id}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('update/{id}/{quantity}',[CartController::class,'update'])->name('cart.update');
});
