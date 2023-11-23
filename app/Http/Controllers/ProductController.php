<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit',['product' => $product]);
    }

    public function update($id, Request $request){
        $product = Product::find($id);
        $data = $request -> validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);
        $product -> update($request->all());
        return redirect(route('product.index'));
    }

    public function destroy($id){
        Product::find($id)->delete();
        return redirect(route('product.index'));
    }



}
