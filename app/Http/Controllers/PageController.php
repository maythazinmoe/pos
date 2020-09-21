<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='')
  {
   
    return view('frontend.home');
  }

   public function about($value='')
  {
   
    return view('frontend.about');
  }

  public function contact($value='')
  {
   
    return view('frontend.contact');
  }

  public function login($value='')
  {
    return view('frontend.login');
  }

}
