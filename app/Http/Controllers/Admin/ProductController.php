<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('editorMenu', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('editorMenuItemNew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $path = $request->file('image')->store('products', 'public');
        //dd($path);
        $params = $request->all();
        $params['image'] = $path;
        Product::create($params);


        $products = Product::get();
        return view('editorMenu', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //dd($product);
        return view('editorMenuItemShow', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       //dd($product->name);
        return view('editorMenuItemNew', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($product);
     
        //Storage::delete($product->image);
        $params = $request->all();
        if ($request->file('image') !== null) {
            $path = $request->file('image')->store('products', 'public');
            //dd($path);
            $params['image'] = $path;
        }
        $product->update($params);


        $products = Product::get();
        return view('editorMenu', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //dd($product);
        $product->delete();
        $products = Product::get();
        return view('editorMenu', compact('products'));
    }
}
