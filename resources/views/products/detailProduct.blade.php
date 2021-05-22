@extends('layouts.base')

@section('content')
 
<h1 class="text-center">Detail Products Page</h1>
<hr>

<div class="container mt-5">
    <div class="row justify-content-center m-2">
        <div class="col-md-8 m-2">
                <div class="card" style="width: 22rem;">
                    <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->title }}</h5>
                      <h4 class="card-title">${{ $product->price }}</h4>
                      <p class="card-text">{{ $product->category }}</p>
                      <hr>
                      <p class="card-text">{{ $product->description }}</p>
                      <a href="{{ route('editProducts', $product->id) }}" class="btn btn-primary">Update</a>
                      <div class="col-sm-2">
                        <form action="{{route('destroy',  $product->id)}}" method="POST">
                           @csrf
                           @method('DELETE')
                           <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                       </form> 
                   </div>
                    </div>
                  </div>
        </div>
    </div>
</div>




    

   
@endsection
               
