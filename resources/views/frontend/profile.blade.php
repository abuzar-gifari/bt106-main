@extends('layouts.frontend')

@section('main')
<div class="container">
    <div class="row align-items-center mt-5">
        <div class="col-md-6"><br>
            
            <form action="{{route('user.profile')}}" method="post" enctype="multipart/form-data" class="" style="padding: 40px; border-radius: 2%; background-color: whitesmoke ">
                @csrf
                <h3 class="text-center h2" style="font-family: 'Inconsolata', monospace;">Update Your Profile</h3><br>
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
                    <label for="name" style="font-family: 'Inconsolata', monospace;" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="phone" style="font-family: 'Inconsolata', monospace;" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" value="{{ auth()->user()->phone }}">
                </div>
                <div class="mb-3">
                    <label for="address" style="font-family: 'Inconsolata', monospace;" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control">{{ auth()->user()->address }}</textarea>    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" style="font-family: 'Inconsolata', monospace;" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="photo" style="font-family: 'Inconsolata', monospace;" class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo">
                </div>
                <button type="submit" style="font-family: 'Inconsolata', monospace;" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
