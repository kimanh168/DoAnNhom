<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/register', function () {return view('/auth/register');})->name('register');
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
    
});
