@extends('layouts.backend')

@section('main')

<div class="container-fluid">
    <div class="row">
        <div class="card mt-5 mb-3 m-auto" style="width: 24rem; font-family: Verdana, Geneva, Tahoma, sans-serif ">
            <img style="height: 400px;" src="{{ asset('image/Sk Md Abuzar Gifari.jpg') }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{ auth()->user()->name }}</h5>
              <p class="card-text">A Professional Web Designer and Developer.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Phone no - {{ auth()->user()->phone }}</li>
              <li class="list-group-item">Address - {{ auth()->user()->address }}</li>
              <li class="list-group-item">Email No - {{ auth()->user()->email }}</li>
            </ul>
            <div class="card-body">
              <a href="{{ url()->previous() }}" class="btn btn-block btn-success">Back to previous page</a>
            </div>
        </div>
    </div>
</div>


@endsection

