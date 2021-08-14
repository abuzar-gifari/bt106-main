<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //dd('ok');
        $products=Product::orderBy('id','desc')->get();
        //dd($products);
        return view('backend.products.index',compact('products'));
    }

    public function create(){
        return view('backend.products.create');
    }

    public function store(Request $request){
        //dd($request->all());
        //dd($request->input('name'));

        $data=[
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'desc'=>$request->input('desc')
        ];

        //dd($data);
        Product::create($data);
        return redirect()->route('admin.product');
    }

    public function edit($id){
       // dd($id);
        //$product= Product::where('id',$id)->first();
        $product= Product::find($id);
        //dd($product);
        return view('backend.products.edit',compact('product'));
    }

    public function update(Request $request,$id){
        //dd($request->all());
        $product=Product::find($id);
        $data=[
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'desc'=>$request->input('desc')
        ];
        $product->update($data);
        return redirect()->route('admin.product');
    }

    public function delete($id){
        //dd($id);
        //Product::where('id',$id)->delete();
        $product=Product::find($id);
        $product->delete();
        return redirect()->back();

    }

}
