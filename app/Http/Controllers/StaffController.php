<?php

namespace App\Http\Controllers;

use App\Staff;
use App\User;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('backend.staffs.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.staffs.create',compact('users'));
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
        "user" => 'required',
        "address" => 'required',
        "phone" => 'required',
        "photo" => 'required',
    ]);

    // If include file, upload file
    $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/staffimg'),$imageName);

    $path = 'backend/staffimg/'.$imageName;
    // Data insert
    $staff = new Staff;
    // col name from database

    $staff->user_id = $request->user;
    $staff->address = $request->address;
    $staff->phone = $request->phone;
    $staff->photo = $path;
    $staff->save();

    // redirect
    return redirect()->route('staffs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $users = User::all();
       $staff=Staff::Find($id);
        return view('backend.staffs.edit',compact('users','staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);

        // Validation
    $request->validate([
        //"id" => 'required|min:4',
        "user" => 'required',
        "address" => 'required',
        "phone" => 'required',
        "photo" => 'required',
    ]);

    // file upload, if data
        if ($request->hasFile('photo')) {
           $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/staffimg'),$imageName);

            $path = 'backend/staffimg/'.$imageName; 
        }else{
            $path = $request->oldphoto;
        }

        // data update
        //$product->id = $request->id;
        $staff=Staff::Find($id);
        $staff->user_id = $request->user;
        $staff->address = $request->address;
        $staff->phone = $request->phone;
        $staff->photo = $path;
        $staff->save();

    // redirect
    return redirect()->route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff=Staff::Find($id);
        $staff->delete();
        return redirect()->route('staffs.index');
    }
}
