<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

        'category_name'=>'required',

    ]);

    Category::create($data);

    return redirect(route('create'));

}

public function edit(Category $data){

return view('admin.edit',['data'=>$data]);

}

public function update(Request $request,Category $data){

    $datam = $request->validate([

        "category_name" => "required"

    ]);

    $data->update($datam);

    return redirect (route('admin.categories'));
}

public function delete(Category $data){

    $data->delete();
    return redirect(route('admin.categories'));

}

public function addProduct(){
    $category = Category::all();
    return view('admin.addProduct',['category'=>$category]);
}


public function storeProduct(Request $request){

    $data = $request->validate([
        'title'=>'nullable',
        'description'=>'nullable',
        'img'=>'nullable',
        'price'=>'nullable',
        'category'=>'nullable',
        'quantity'=>'nullable',
    ]);



    Product::create($data);

    return redirect(route('addProduct'));

}

public function viewProducts() {
    $data = Product::paginate(10);

    return view('admin.viewProducts',['data'=>$data]);
}

}
