@extends('layouts.backend')

@section('main')
    <div class="container mt-3">
        <h2 class="text-center">Order List</h2>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">List</th>
                <th scope="col">Order NO</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
                <th scope="col">Order Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $key=>$order)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$order->truck_no}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->created_at->format('Y-m-d')}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <a href="{{route('admin.order.show',$order->id)}}" class="btn btn-primary">View</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{$orders->links()}}

    </div>

@endsection
