<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/menu',[HomeController::class,'menu'])->name('home.menu');

//Route::get('/{id}',[MyController::class,'goto']);




Route::group(['prefix' => 'admin'],function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    require __DIR__.'/auth.php';

    Route::get('products',[ProductController::class,'index'])->name('products');
    Route::get('product-del-{id}',[ProductController::class,'delete'])->name('product_del');
    Route::get('product-edit-{id}',[ProductController::class,'edit'])->name('product_edit');
    Route::get('product-add',[ProductController::class,'add'])->name('product_add');
    Route::post('product-add',[ProductController::class,'post_add'])->name('product_add');
});
