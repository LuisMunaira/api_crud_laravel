<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return view('products.inicio');
    }
    public function index(){
        $products = Product::all();
        return view('products.index' , ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    } 

    public function store(Request $request){
      $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($data);

        return redirect(route('product.index')) ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index')) ->with('success', 'Product deleted successfully');
    }

}
