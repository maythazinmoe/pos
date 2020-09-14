<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

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
        //dd($item);
        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create',compact('categories'));
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

        // Validation
    $request->validate([
        //"id" => 'required|min:4',
        "name" => 'required',
        "photo" => 'required',
        "sale_price" => 'required',
        "description" => 'required',
        "category" => 'required'
    ]);

    // If include file, upload file
    $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/productimg'),$imageName);

    $path = 'backend/productimg/'.$imageName;
    // Data insert
    $product = new Product;
    // col name from database
    //$product->id = $request->id;
    $product->name = $request->name;
    $product->photo = $path;
    $product->sale_price = $request->sale_price;
    $product->description = $request->description;
    $product->category_id = $request->category;
    $product->save();

    // redirect
    return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories = Category::all();
        return view('backend.products.show',compact('categories','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('backend.products.edit',compact('categories','product'));
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
        //dd($request);

        // Validation
    $request->validate([
        //"id" => 'required|min:4',
        "name" => 'required',
        "photo" => 'required',
        "sale_price" => 'required',
        "description" => 'required',
        "category" => 'required'
    ]);

    // file upload, if data
        if ($request->hasFile('photo')) {
           $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/productimg'),$imageName);

            $path = 'backend/productimg/'.$imageName; 
        }else{
            $path = $request->oldphoto;
        }

        // data update
        //$product->id = $request->id;
        $product->name = $request->name;
        $product->photo = $path;
        $product->sale_price = $request->sale_price;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->save();

    // redirect
    return redirect()->route('products.index');
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
        return redirect()->route('products.index');
    }
}
