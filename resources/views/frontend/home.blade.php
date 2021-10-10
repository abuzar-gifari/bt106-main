@extends('layouts.frontend')

@section('title')
    Home
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap');
</style>

@section('main')
<section class="py-5 text-center container" style="font-family: 'Bree Serif', serif;">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Neque porro quisquam est</h1>
        <p class="lead text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <p>
          <a href="{{ route('add.cart.show') }}" class="btn btn-primary my-2">Show Cart ({{ $total_quantity }})</a>
        </p>
      </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-light" style="font-family: 'Bree Serif', serif;">All Products List</h2><hr><br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
            @foreach($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                    
                    <img src="{{asset('uploads/products/'.$product->photo)}}" alt="" height="250px">

                    <div class="card-body">
                        <p class="h3" style="font-family: 'Bree Serif', serif;">{{ $product->name }}</p>
                        <p class="card-text" style="font-family: 'Bree Serif', serif;">{{ $product->desc }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button style="font-family: 'Bree Serif', serif;" type="button" class="btn btn-success disabled">BDT - {{ $product->price }}</button>
                            </div>
                            <a href="{{ route('add.cart',$product->id) }}" style="font-family: 'Bree Serif', serif;" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
