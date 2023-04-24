<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;

class BrandController extends Controller
{
    public function index (Request $request)
    {
        $keyword = $request -> get('search');
        $perPage = 5;

        if(!empty ($keyword)){
            $brands = Brand::where('name', 'LIKE', "%$keyword%" )
            ->orWhere('description', 'LIKE', "%$keyword%" )
            ->latest()->paginate($perPage);
        }else{
            $brands = Brand::latest()->paginate($perPage);
        }
        return view('admin.brands.index', ['brands'=>$brands])->with('1',(request()->input('page',1) -1) *5);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $brand = new Brand();

        $brand->name = $request->name;
        $brand->description = $request->description;

        $brand->save();
        return redirect()->route('brands.index')->with('success', 'Пользователь создан');
    }

    public function edit($id){
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', ['brand'=>$brand]);
    }

    public function update(Request $request, Brand $brand){
        $request->validate([
            'name'=>'required'
        ]);

        $brand = Brand::find($request->hidden_id);

        $brand->name = $request->name;
        $brand->description = $request->description;

        $brand->save();
        return redirect()->route('brands.index')->with('success', 'Пользователь обнавлён');
    }

    public function destroy($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Пользователь удалён');
    }
}
