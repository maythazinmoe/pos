<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
	public function __construct($value='')
    {
        $this->middleware('role:Admin|Staff');
    }
    public function dashboardfun($value='')
  {
    return view('backend.dashboard');
  }
}
