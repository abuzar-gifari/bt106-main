@extends('layouts.frontend')

@section('main')
    
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
</style>

<div class="container" style="font-family: 'Bree Serif', serif;">
    <div class="row align-items-center mt-3">
        <div class="col-md-6"><br>
            <h3 class="h2">Order Details</h3><br>
            <p><strong>Order NO : </strong> {{ $order->truck_no }} </p>
            <p><strong>Customer Name : </strong> {{ $order->name }} </p>
            <p><strong>Customer Email : </strong> {{ $order->email }} </p>
            <p><strong>Customer Address : </strong> {{ $order->address }} </p>
            <p><strong>Customer Phone : </strong> {{ $order->phone }} </p>
            <p><strong>Total Price : </strong> {{ $order->price }} </p>
            <p><strong>Total Quantity : </strong> {{ $order->quantity }} </p>
            <p><strong>Payment Method : </strong> {{ $order->payment_method }} </p>
            <p><strong>Transaction id : </strong> {{ $order->txn_id }} </p>
            <p><strong>Order Status : </strong> {{ $order->status }} </p>
            <p><strong>Order Date : </strong> {{ $order->created_at->format('Y-m-d') }} </p>
        </div>

        <div class="col-md-6"><br>
            <table class="table" 
            style="font-family: 'Bree Serif', serif; background-color: whitesmoke;">
                <thead class="text-center">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($order->details as $key=>$details)

                        <tr>
                            <td>{{ $details->product_name }}</td>
                            <td>{{ $details->product_price }}</td>
                            <td>{{ $details->quantity }}</td>
                            <td>{{ $details->product_price * $details->quantity }}</td>
                        </tr>               

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
