<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('backend.suppliers.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.suppliers.create');
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
            'name' => 'required',
            "company_name" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "address" => 'required'
        ]);
        
        // Data insert
        $supplier = new Supplier;
        $supplier->name = $request->name;
        $supplier->company_name = $request->company_name;
        $supplier->email= $request->email;
        $supplier->phone= $request->phone;
        $supplier->address= $request->address;
        $supplier->save();
        
        //redirect
        return redirect()->route('suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('backend.suppliers.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            "company_name" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "address" => 'required'
        ]);
        
        // Data update
        $supplier->name = $request->name;
        $supplier->company_name = $request->company_name;
        $supplier->email= $request->email;
        $supplier->phone= $request->phone;
        $supplier->address= $request->address;
        $supplier->save();
        
        //redirect
        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index');
    }
}
