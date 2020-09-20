<?php

namespace App\Http\Controllers;

use App\Sale;
use Auth;
use App\Product;
use Illuminate\Http\Request;
use App\Saledetail;
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
         // $products = Product::all();  
         return view('backend.sales.index',compact('sales'));

          }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('backend.sales.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = $request->shop_data;
        
        $total = 0;
        foreach ($products as $product) {
           $total+=($product['qty']*$product['sale_price']);
        }

        $sale = new Sale;
        $sale->date = date('Y-m-d');
        $sale->voucher = uniqid();
        $sale->total = $total;
        $sale->status = 0;
        $sale->user_id = Auth::id();
        $sale->save();

        foreach ($products as $value) {
            $sale->products()->attach($value['id'],['quantity'=>$value['qty']]);
        }

        return 'Successful!';

    
    
    


        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        $sales = Sale::all();
        // return view('backend.sales.create');
        return view('backend.sales.show',compact('sale'));

        
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        // $brands = Brand::all();
        // $sales=Sale::All();  

        // $subcategories = Subcategory::all();
        //return view('backend.sales.edit',compact('sale'));    
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
         $request->validate([
        // "codeno" => 'required|min:4',
        "date" => 'required',
        "voucherno" => 'required',
        "total"=>'required',
        "user" => 'Auth::id()',
        "status" => 'required',
        // "photo" => 'sometimes',
        // "brand" => 'required',
        // "subcategory" => 'required'
    ]);

        // file upload, if data
        // if ($request->hasFile('photo')) {
        //    $imageName = time().'.'.$request->photo->extension();

        //     $request->photo->move(public_path('backend/itemimg'),$imageName);

        //     $path = 'backend/itemimg/'.$imageName; 
        // }else{
        //     $path = $request->oldphoto;
        // }

        // data update
        // $sale = new Sale;
    // $item->codeno = $request->codeno;
    $sale->date = $request->date;
    $sale->voucher = $request->voucherno;
    $sale->total = $request->total;
    // $sale->discount=$request->required,

    // $sale->photo = $path;

    // $sale->discount = $request->discount;
    $sale->status = $request->status;
    $sale->user = $request->users->name;

    // $sale->brand_id = $request->brand;
    // $sale->subcategory_id = $request->subcategory;
    $sale->save();

    // redirect
    return redirect()->route('sales.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //dd($sale);
        $sale->delete();
        return redirect()->route('sales.index');    }
}
