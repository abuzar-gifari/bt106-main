@extends('layouts.frontend')
 
<style>
@import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Orienta&display=swap');
</style>

@section('main')
<div class="container" style="font-family: 'Bree Serif', serif;">
    <div class="row align-items-center mt-5">
        <div class="col-md-6"><br>
            
            <form action="{{route('user.profile')}}" method="post" enctype="multipart/form-data" class="">
                @csrf
                <h3 class="text-center h2" style="font-family: 'Lilita One', cursive;">Update Your Profile</h3><br>
                <h5 class="text-center" style="font-family: 'Orienta', sans-serif;">User Profile Photo</h5>
                <img src="{{ asset('uploads/user/'.auth()->user()->photo) }}" style="height: 120px;" class="rounded mx-auto d-block"><br><br>
            
                <div class="mb-3">
                    <label for="name" class="form-label" style="font-family: 'Orienta', sans-serif;">Full Name</label>
                    <input style="font-family: 'Orienta', sans-serif;" type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label" style="font-family: 'Orienta', sans-serif;">Phone Number</label>
                    <input  style="font-family: 'Orienta', sans-serif;" type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" value="{{ auth()->user()->phone }}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label" style="font-family: 'Orienta', sans-serif;">Address</label>
                    <textarea style="font-family: 'Orienta', sans-serif;" name="address" id="address" class="form-control">{{ auth()->user()->address }}</textarea>    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-family: 'Orienta', sans-serif;">Email address</label>
                    <input style="font-family: 'Orienta', sans-serif;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label" style="font-family: 'Orienta', sans-serif;">Photo</label>
                    <input style="font-family: 'Orienta', sans-serif;" type="file" class="form-control" name="photo" id="photo">
                </div>
                <button type="submit" class="btn btn-primary" style="font-family: 'Orienta', sans-serif;">Update</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="text-center" style="font-family: 'Lilita One', cursive;">Order List</h2>

            <table class="table">
                <thead>
                <tr style="font-family: 'Lilita One', cursive;">
                    <th scope="col">Order NO</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">View</th>
                </tr>
                </thead>
                <tbody style="font-family: 'Orienta', sans-serif;">
                @foreach($orders as $key=>$order)
                <tr>
                    <td>{{$order->truck_no}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->created_at->format('Y-m-d')}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <a href="{{route('order.show',$order->id)}}" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
 