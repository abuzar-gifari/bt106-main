@extends('layouts.frontend')


@section('main')
    

<div class="container">
    <div class="row align-items-center mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('login')}}" method="post" class="" style="padding: 40px; border-radius: 2%; background-color: whitesmoke ">
                @csrf
                <h3 class="text-center h2" style="font-family: 'Inconsolata', monospace;">Login Form</h3>
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
                    <label for="exampleInputEmail1" style="font-family: 'Inconsolata', monospace;" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" style="font-family: 'Inconsolata', monospace;" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" style="font-family: 'Inconsolata', monospace;" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection