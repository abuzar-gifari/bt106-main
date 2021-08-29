@extends('layouts.backend')

@section('main')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="text-center">Edit Product</h2>
                <form method="post" enctype="multipart/form-data" action="{{route('admin.product.edit',$product->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$product->name}}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{$product->price}}">
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Product Description</label>
                        <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc">{{$product->desc}}</textarea>
                        @error('desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Product Photo</label>
                        <input type="file" class="form-control mb-3 @error('photo') is-invalid @enderror" id="photo" name="photo">
                        <img src="{{asset('uploads/products/'.$product->photo)}}" alt="" style="height: 50px;">
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
