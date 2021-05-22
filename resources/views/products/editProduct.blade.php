@extends('layouts.base')

@section('content')
 
<h1 class="text-center">Edit Products Page</h1>
<hr>

<main>
    <div class="container-fluid mt-2">
        <h1 class="mt-4">Edit Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit</li>
        </ol>  

        <form action="{{ route('updateProducts', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
           
        <div class="row">
            <div class="form-group col-md-3 mt-3">
                <h3>Image</h3>
                <img class="img-thumbnail" style="height: 30vh" src="{{ Storage::url($product->image) }}" alt="product_image">
                <input class="mt-3" type="file"  name="image">
            </div>

            <div class="mb-5">
                <label for="title"><h4>Title</h4></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}">
            </div>
           
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="price"><h4>Price</h4></label>
                    <input type="number" class="form-control" id="price" name="price"  value="{{ $product->price }}">
                </div>

                <div class="mb-5">
                    <label for="category"><h4>Category</h4></label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}">
                </div>
            </div>

            <div class="form-group col-md-6 mt-3">
                <h3>Description</h3>
                <textarea class="form-control" name="description" rows="5">{{ $product->description }}</textarea>
            </div>

        </div>
        <input type="submit" name="submit" class="btn btn-primary my-5">
    </div>
</form>
</main>

   
@endsection
               
