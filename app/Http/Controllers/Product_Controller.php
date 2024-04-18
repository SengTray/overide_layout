<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product_Controller extends Controller
{
    public function index(){
        return view('default/admin/dashboard');
    }
    public function list_all_products(){
        return view('default.admin.products.index');
    }
    public function add(){
        // echo "hello";die;
        return view('default.admin.products.add');
    }
    public function product_detail(){
        return view('default.admin.products.product_detail');
    }
    public function product_edit($id){
        return view('default.admin.products.product_edit');
    }
}
