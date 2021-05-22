@extends('layouts.base')

@section('content')
 
<h1 class="text-center">All Products Page</h1>
<hr>


<div class="container m-5" style="display: flex;">
    <div class="row justify-content-center m-2">
        <div class="col-md-8 m-2">
            @if (count($products) > 0)
                @foreach ($products as $product)
                <div class="card m-3 p-3" style="width: 22rem;">
                    <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->title }}</h5>
                      <h4 class="card-title">${{ $product->price }}</h4>
                      <p class="card-text">{{ $product->category }}</p>
                      <a href=" {{route('detailProducts',$product->id) }}" class="btn btn-primary">Full Detail</a>
                    </div>
                  </div>
                @endforeach
            @endif
        </div>
    </div>
</div>




    

   
@endsection
               
