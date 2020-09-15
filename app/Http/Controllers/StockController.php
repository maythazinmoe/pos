<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Supplier;
use App\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $stocks = Stock::all();
        return view('backend.stocks.index',compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('backend.stocks.create',compact('suppliers','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd ($request);

        // Validation
        $request->validate([
            'date' => 'required',
            "supplier_id" => 'required',
            "product_id" => 'required',
            "quantity" => 'required',
            "buy_price" => 'required',
            /*"status" => 'required'*/
        ]);
        
        // Data insert
        $stock = new Stock;
        // col name from database
        $stock->date = $request->date;
        $stock->supplier_id = $request->supplier_id;
        $stock->product_id= $request->product_id;
        $stock->quantity= $request->quantity;
        $stock->buy_price= $request->buy_price;
        $stock->status= 0;
        $stock->save();
        
        //redirect
        return redirect()->route('stocks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('backend.stocks.edit',compact('suppliers','products','stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //dd ($request);

        // Validation
        $request->validate([
            'date' => 'required',
            "supplier" => 'required',
            "product" => 'required',
            "quantity" => 'required',
            "buy_price" => 'required',
            /*"status" => 'required'*/
        ]);
        
        // Data update
        $stock->date = $request->date;
        $stock->supplier_id = $request->supplier;
        $stock->product_id= $request->product;
        $stock->quantity= $request->quantity;
        $stock->buy_price= $request->buy_price;
        $stock->status= 0;
        $stock->save();
        
        //redirect
        return redirect()->route('stocks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index');
    }
}
