@extends('layouts.frontend')

@section('title')
    Home
@endsection

@section('main')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-light">All Products List</h2><br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
            @foreach($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                    
                    <img src="{{asset('uploads/products/'.$product->photo)}}" alt="" height="200px">

                    <div class="card-body">
                        <p class="h3">{{ $product->name }}</p>
                        <p class="card-text">{{ $product->desc }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success disabled">BDT - {{ $product->price }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection