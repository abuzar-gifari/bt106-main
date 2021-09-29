<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart($id)
    {
        // dd($id);
        $product = Product::find($id);
        $cart = session()->has('cart') ? session()->get('cart') : [];
        //dd($cart);

        if (key_exists($product->id, $cart)) {
            $cart[$product->id]['quantity'] = $cart[$product->id]['quantity'] + 1;
        }else {
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }
        session(['cart' => $cart]);
        Session::flash('message','Product Added to Cart');
        Session::flash('alert','success');
        return redirect()->back();
    }

    public function show() {
        $carts = session()->has('cart') ? session()->get('cart') : [];
        return view('frontend.cart',compact('carts'));
    }

    //order placement
    public function order(Request $request) {
       // dd($request->all());
        
       $inputs=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
            'price'=>$request->input('price'),
            'quantity'=>$request->input('quantity'),
            'truck_no'=>auth()->user()->id.time(),
            'user_id'=>auth()->user()->id,
            'status'=>'Pending'

        ];

        $carts = session()->has('cart') ? session()->get('cart') : [];
        //dd($inputs,$carts);

        $order = Order::create($inputs);

        foreach($carts as $cart) {
            OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$cart['product_id'],
                'product_name'=>$cart['name'],
                'product_price'=>$cart['price'],
                'quantity'=>$cart['quantity']
            ]);
        }

        session()->forget('cart');
        return redirect()->route('profile');

    }

    public function checkout() {
        $carts = session()->has('cart') ? session()->get('cart') : [];
        return view('frontend.checkout',compact('carts'));
    }
}
