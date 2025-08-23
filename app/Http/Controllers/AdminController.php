<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = Category::all();
        return view('admin.categories', compact('data'));
    }

    public function create(Request $request){
       $data = $request->validate([
            'category_name'=>'required|string|max:255'
        ]);

        $store = Category::create($data);

        return redirect()->route('admin.categories')->with('success', 'Category created successfully.');
    }

}
