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


public function storeProduct(Request $request)
{

    $data = $request->validate([
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'img' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'price' => 'nullable|numeric',
        'category' => 'nullable|string|max:255',
        'quantity' => 'nullable|integer',
    ]);

        $imgName = time().'.'.$request->img->getClientOriginalExtension();
        $request->img->move(public_path('images'), $imgName);
        $data['img'] = $imgName;

    Product::create($data);

    return redirect()->route('viewProducts');
}

public function viewProducts() {
    $data = Product::orderBy('created_at','desc')->paginate(10);

    return view('admin.viewProducts',['data'=>$data]);
}

public function editViewProducts($data){
$data = Product::find($data);
return view('admin.edit_viewProducts',['data'=>$data]);
}

public function updateViewProducts(Request $request, Product $data){

$updatedViewProducts = $request->validate([
        'title'=>'nullable',
        'description'=>'nullable',
        'price'=>'nullable',
        'img'=>'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'category'=>'nullable',
        'quantity'=>'nullable',
]);

    if($request->hasFile('img')){
$deleteImgPath = public_path('images/'.$data->img);
    if(file_exists($deleteImgPath)){
        unlink($deleteImgPath);
    }

    $imgName = time().'.'.$request->img->getClientOriginalExtension();
    $request->img->move(public_path('images'),$imgName);
    $updatedViewProducts['img'] = $imgName;

    }

$data->update($updatedViewProducts);
return redirect(route('viewProducts'));

}

public function deleteViewProducts(Product $data){

    if(($data->img)){
        $deleteImgPath = public_path('images/'.$data->img);
        if(file_exists($deleteImgPath)){
            unlink($deleteImgPath);
        }
    }
    $data->delete();
    return redirect(route('viewProducts'));

}

public function searchViewProducts(Request $request){

$searchData = $request->search;
$data = Product::where('category','LIKE','%'.$searchData.'%')->paginate(10);


return view('admin.ViewProducts',['data'=>$data]);

}

}
