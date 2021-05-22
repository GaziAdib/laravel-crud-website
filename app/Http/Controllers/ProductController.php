<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
   
    public function index()
    {
         $products = Product::all();
         return view('products.showProducts', compact('products'));

        
    }

   
    public function create()
    {
        return view('products.createProducts');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'image' => 'required|image',
            'price' => 'required',
            'category' => 'required|string',
            'description' => 'required|string'

        ]);

        $product = new Product;

        

        if ($request->hasFile('image')) {
            $product->image = $request->image->store('public/images');
        }

        $product->title = $request->title;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;

        // $img_file = $request->file('image');
        // $product->image = "storage/images/".$img_file->hashName();

       

        $product->save();

        return redirect()->route('showProducts')->with('success', "Main Page Data Has been updated successfully!");


    }

   
    public function detail($id)
    {
        $product = Product::find($id);
        return view('products.detailProduct', compact('product'));
    }

   
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.editProduct', compact('product'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'image' => 'required|image',
            'price' => 'required',
            'category' => 'required|string',
            'description' => 'required|string'

        ]);

        $product = Product::find($id);


        if ($request->hasFile('image')) {
            $product->image = $request->image->store('public/images');
        }

        $product->title = $request->title;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return redirect()->route('showProducts')->with('success', "Product Has been updated successfully!");

    }

  
    public function destroy($id)
    {
        $product = Product::find($id);
        @unlink(public_path($product->image));
        $product->delete();

        return redirect()->route('showProducts')->with('success', 'Portfolio Deleted Successfully!');
    }
}
