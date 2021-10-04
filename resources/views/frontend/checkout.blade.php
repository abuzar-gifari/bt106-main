@extends('layouts.frontend')
 
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
</style>

@section('main')

<div class="container">

    <div class="row">
    
        <h2 class="text-center mt-3"  style="font-family: 'Bree Serif', serif;">Please Checkout</h2><br><hr>
    
        
        <div class="col-md-6">
            <br>
            <h3 class="text-center"  style="font-family: 'Bree Serif', serif;">Your Cart Info</h3><br>
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

        <div class="col-md-6">
            <br>
            <form action="{{ route('order') }}" method="post" class="" style="font-family: 'Bree Serif', serif;">
                @csrf
                <h3 class="text-center h2" style="font-family: 'Bree Serif', serif;">Place Your Order</h3>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text"  value="{{ auth()->user()->phone }}" class="form-control" name="phone" id="phone" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Present Address</label>
                    <textarea name="address" id="address" class="form-control">{{ auth()->user()->address }}</textarea>    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email"  value="{{ auth()->user()->email }}" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="payment_method" class="form-label">Payment Method</label>
                    <select name="payment_method" id="payment_method" class="form-control">
                        <option value="Bkash">Bkash</option>
                        <option value="Rocket">Rocket</option>
                        <option value="Nogod">Nogod</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="txn_id" class="form-label">Transaction ID</label>
                    <input type="text" class="form-control" name="txn_id" id="txn_id">
                </div>
                <input type="hidden" value="{{ $total_price }}" name="price">
                <input type="hidden" value="{{ $total_quantity }}" name="quantity">
                <button type="submit" class="btn btn-primary">Place Order</button>
            </form>
    
        </div>
    </div>

</div>


@endsection
