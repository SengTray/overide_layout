<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[Product_Controller::class,'index'])->name('dashboard');
Route::get('/product/list',[Product_Controller::class,'list_all_products'])->name('product_list');
Route::get('/product/add',[Product_Controller::class,'add'])->name('product_add');
Route::get('/product/product_detail',[Product_Controller::class,'product_detail'])->name('product_detail');
Route::get('/product/product_edit/{id}',[Product_Controller::class,'product_edit'])->name('product_edit');




