@extends('layouts.frontend')

@section('main')
    
<style>
    @import url('https://fonts.googleapis.com/css2?family=Suez+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Orienta&display=swap');
</style>

<div class="container" style="font-family: 'Bree Serif', serif;">
    <div class="row align-items-center mt-3">
        <div class="col-md-6"><br>
            <h3 class="h2 text-center" style="font-family: 'Lilita One', cursive;">Order Details</h3><br>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Order NO : </strong> {{ $order->truck_no }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Customer Name : </strong> {{ $order->name }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Customer Email : </strong> {{ $order->email }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Customer Address : </strong> {{ $order->address }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Customer Phone : </strong> {{ $order->phone }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Total Price : </strong> {{ $order->price }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Total Quantity : </strong> {{ $order->quantity }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Payment Method : </strong> {{ $order->payment_method }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Transaction id : </strong> {{ $order->txn_id }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Order Status : </strong> {{ $order->status }} </p>
            <p style="font-family: 'Orienta', sans-serif;"><strong style="">Order Date : </strong> {{ $order->created_at->format('Y-m-d') }} </p>
        </div>

        <div class="col-md-6"><br>
            <table class="table" 
            style="font-family: 'Bree Serif', serif; background-color: whitesmoke;">
                <thead class="text-center">
                <tr>
                    <th scope="col" style="font-family: 'Lilita One', cursive;">Product Name</th>
                    <th scope="col" style="font-family: 'Lilita One', cursive;">Product Price</th>
                    <th scope="col" style="font-family: 'Lilita One', cursive;">Quantity</th>
                    <th scope="col" style="font-family: 'Lilita One', cursive;">Total Price</th>
                </tr>
                </thead>
                <tbody class="text-center" style="font-family: 'Orienta', sans-serif;">
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
