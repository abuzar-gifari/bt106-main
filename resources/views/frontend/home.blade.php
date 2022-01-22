@extends('layouts.frontend')

@section('title')
    Home
@endsection

{{-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
</style> --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orienta&display=swap');
</style>
@section('main')
<section class="py-5 text-center container" style="font-family: 'Bree Serif', serif;">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="font-family: 'Orienta', sans-serif;">Welcome to AmarShopBD</h1>
        <p class="lead text-muted" style="font-family: 'Orienta', sans-serif;">
        
            AmarShopBD is an online e-commerce site that sells all kinds of essentials in a very simple way, this online marketplace has been working successfully for over 2 years now and has gained worldwide reputation. There are 30+ categories of products that can meet the daily needs of the people, we try our best to help our customers.
        
        </p>
        <a href="{{ route('add.cart.show') }}"><i class="fas fa-shopping-cart" style="height: 20px; color:red; margin-top: 10px"> ( {{ $total_quantity }} ) </i></a>
      </div>
    </div>
</section>




<div class="album py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-light" style="font-family: 'Orienta', sans-serif;">All Products List</h2><hr><br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
            @foreach($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                    
                    {{-- <img src="{{asset('uploads/products/'.$product->photo)}}" alt="" height="250px"> --}}
                    <img src="{{$product->photo}}" alt="" height="250px">

                    <div class="card-body">
                        <p class="h3" style="font-family: 'Orienta', sans-serif;">{{ $product->name }}</p>
                        <p class="card-text" style="font-family: 'Orienta', sans-serif;">{{ $product->desc }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button style="font-family: 'Orienta', sans-serif;" type="button" class="btn btn-success disabled">BDT - {{ $product->price }}</button>
                            </div>
                            <a href="{{ route('add.cart',$product->id) }}"  style="font-family: 'Orienta', sans-serif;" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
