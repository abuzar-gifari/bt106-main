@extends('layouts.frontend')

@section('main')

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2 class="text-center mt-3">Your Cart</h2><br>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($carts as $key=>$cart)
                <tr>
                    <td>{{ $cart['name'] }}</td>
                    <td>{{ $cart['price'] }} BDT</td>
                    <td>{{ $cart['quantity'] }}</td>
                    <td>{{ $cart['price']*$cart['quantity'] }} BDT</td>
                </tr>      
                @endforeach
              
            </tbody>
        </table>        
    </div>
</div>

@endsection
