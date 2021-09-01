@extends('layouts.backend')

@section('main')

    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="font-family: Arial">
                    <h5 class="card-title">{{ auth()->user()->name }}</h5>
                    <p class="card-text"><strong>Email : </strong>{{ auth()->user()->email }}</p>
                    <p class="card-text"><strong>Address : </strong>{{ auth()->user()->address }}</p>
                    <p class="card-text"><strong>Phone no : </strong>{{ auth()->user()->phone }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
