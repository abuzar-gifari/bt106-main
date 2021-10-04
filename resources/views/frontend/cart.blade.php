@extends('layouts.frontend')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
</style>

@section('main')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2 class="text-center mt-3"  style="font-family: 'Bree Serif', serif;">Your Cart</h2><br>
        <table class="table" 
            style="font-family: 'Bree Serif', serif; background-color: whitesmoke;">
            <thead class="text-center">
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody class="text-center">

                @php
                    $total_quantity=0;
                    $total_price=0;
                @endphp

                @foreach ($carts as $key=>$cart)

                    <tr>
                        <td>{{ $cart['name'] }}</td>
                        <td>{{ $cart['price'] }} BDT</td>
                        <td>{{ $cart['quantity'] }}</td>
                        <td>{{ $cart['price']*$cart['quantity'] }} BDT</td>
                        <td><a href="{{ route('deletecartitem') }}" class="btn btn-sm btn-danger">Remove Item</a></td>
                    </tr>   
                    
                    @php
                        $total_quantity+=$cart['quantity'];
                        $total_price+=( $cart['price']*$cart['quantity'] );
                    @endphp                

                @endforeach
                
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>{{ $total_quantity }}</td>
                        <td>{{ $total_price }} BDT</td>
                    </tr>
            </tbody>
        </table>   
        @if ($total_quantity==0)
            <div class="btn-warning">
                <p>No Product Added to the cart! Please Add <a href="{{ route('home') }}">Products</a> to the cart</p>     
            </div>
        @else
            <a href="{{ route('checkout') }}" class="btn btn-success btn-lg" style="font-family: 'Bree Serif', serif;">
                Checkout
            </a>
        @endif     
    </div>
</div>

@endsection
