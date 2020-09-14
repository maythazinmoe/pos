<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales=Sale::All();  
         return view('backend.items.index',compact('sales'));
          }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        // "codeno" => 'required|min:4',
        "name" => 'required',
        "price" => 'required',
        "discount" => 'required',
        "description" => 'required',
        "photo" => 'required',
        "brand" => 'required',
        "subcategory" => 'required'
    ]);

    // If include file, upload file
    $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/itemimg'),$imageName);

    $path = 'backend/itemimg/'.$imageName;
    // Data insert
    $sale = new Sale;
    // $item->codeno = $request->codeno;
    $item->name = $request->name;
    $item->photo = $path;
    $item->price = $request->price;
    $item->discount = $request->discount;
    $item->description = $request->description;
    $item->brand_id = $request->brand;
    $item->subcategory_id = $request->subcategory;
    $item->save();

    // redirect
    return redirect()->route('items.index');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
