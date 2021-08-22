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
        //dd($request->all());
        $newName = 'product_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
        //dd($newName);
        $request->photo->move('uploads/products/',$newName);

        $data=[
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'desc'=>$request->input('desc'),
            'photo'=>$newName
        ];

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

        //photo edit portion
        if ($request->file('photo')){
            if(file_exists('uploads/products/'.$product->photo)){
                unlink('uploads/products/'.$product->photo);
            }
            $newName = 'product_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
            $request->photo->move('uploads/products/',$newName);
            //$product->photo($newName);
            $product->update(['photo'=>$newName]);
        }
        return redirect()->route('admin.product');
    }

    public function delete($id){
        //dd($id);
        //Product::where('id',$id)->delete();
        $product=Product::find($id);

        if(file_exists('uploads/products/'.$product->photo)){
            unlink('uploads/products/'.$product->photo);
        }

        $product->delete();
        return redirect()->back();

    }

}
