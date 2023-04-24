<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Product;

class ProductController extends Controller
{
    public function index (Request $request)
    {
        $keyword = $request -> get('search');
        $perPage = 5;

        if(!empty ($keyword)){
            $products = Product::where('nomenclature', 'LIKE', "%$keyword%" )
            ->orWhere('article', 'LIKE', "%$keyword%" )
            ->latest()->paginate($perPage);
        }else{
            $products = Product::latest()->paginate($perPage);
        }
        return view('admin.products.index', ['products'=>$products])->with('1',(request()->input('page',1) -1) *5);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request){
        $request->validate([
            'article' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2028'
        ]);

        $product = new Product;

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $product->article = $request->article;
        $product->nomenclature = $request->nomenclature;
        $product->price = $request->price;
        $product->count = $request->count;
        $product->stock_id = $request->stock_id;
        $product->brand_id = $request->brand_id;

        $product->save();
        return redirect()->route('products.index')->with('success', 'Пользователь создан');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('admin.products.edit', ['product'=>$product]);
    }

    public function update(Request $request, Product $product){
        $request->validate([
            'nomenclature'=>'required'
        ]);

        $file_name = $request->hidden_product_image;

        if($request->image !=''){
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);
        }

        $product = Product::find($request->hidden_id);

        $product->article = $request->article;
        $product->nomenclature = $request->nomenclature;
        $product->price = $request->price;
        $product->count = $request->count;
        $product->stock_id = $request->stock_id;
        $product->brand_id = $request->brand_id;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Пользователь обнавлён');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $image_path = public_path()."/images/";
        $image = $image_path. $product->imsge;
        if(file_exists($image)){
            @unlink($image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Пользователь удалён');
    }
}
