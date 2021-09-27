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
            style="font-family: 'Bree Serif', serif; background-color: whitesmoke;"
        >
            <thead class="text-center">
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
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
    </div>
</div>

@endsection
