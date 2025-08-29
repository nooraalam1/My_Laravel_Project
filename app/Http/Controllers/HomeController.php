<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){
        $products = Product::orderBy('created_at','desc')->get();

        return view('home.index',['products'=>$products]);
    }
}
