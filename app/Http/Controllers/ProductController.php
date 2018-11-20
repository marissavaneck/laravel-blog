<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostProduct;
use App\Http\Requests\UpdateProduct;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostProduct $request)
    {
        $validated = $request->validated();

        $product = new Product();
        $product->product = $request->product;
        $product->price = $request->price;
        $product->save();


        return redirect('/products')->with('status', 'product toegevoegd');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, Product $product)
    {
        $validated = $request->validated();
        $product->product = $request->product;
        $product->price = $request->price;
        $product->save();
        return redirect('/products')->with('message', 'product gewijzigt');

    }

    public function delete(Product $product){
        return view('products.delete', compact('product'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products')->with('message', 'products verwijderd');
    }
}
