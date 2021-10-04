@extends('layouts.frontend')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
</style>

@section('main')
<div class="container" style="font-family: 'Bree Serif', serif;">
    <div class="row align-items-center mt-5">
        <div class="col-md-6"><br>
            
            <form action="{{route('user.profile')}}" method="post" enctype="multipart/form-data" class="">
                @csrf
                <h3 class="text-center h2">Update Your Profile</h3><br>
                <h5 class="text-center">User Profile Photo</h5>
                <img src="{{ asset('uploads/user/'.auth()->user()->photo) }}" style="height: 120px;" class="rounded mx-auto d-block"><br><br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" value="{{ auth()->user()->phone }}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control">{{ auth()->user()->address }}</textarea>    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="text-center">Order List</h2>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Order NO</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">View</th>
                </tr>
                </thead>
                <tbody>
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
