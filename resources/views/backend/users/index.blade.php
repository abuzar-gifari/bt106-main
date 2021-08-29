@extends('layouts.backend')
@section('main')
    <div class="container mt-3">
        <h2 class="text-center">Users List</h2>
        <a href="{{ route('admin.user.create') }}" class="btn btn-success" target="_blank">Create New User</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">List no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No</th>
                <th scope="col">Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-warning">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
