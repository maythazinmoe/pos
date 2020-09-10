<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;


class PageController extends Controller
{
  public function home($value='')
  {
    $items = Item::all();
    $brands=Brand::all();
    return view('frontend.home',compact('items','brands'));
  }

  public function itemdetail($id)
  {
    $item=Item::find($id);
    return view('frontend.detail',compact('item'));
  }

  public function promotions($value='')
  {
    return view('frontend.promotions');
  }

  public function filteritems($value='')
  {
    return view('frontend.filteritems');
  }

  public function shoppingcart($value='')
  {
    return view('frontend.shoppingcart');
  }

  public function itemsbybrand($id)
  {
    $brand=Brand::find($id);
    return view('frontend.itemsbybrand',compact('brand'));
  }

  public function login($value='')
  {
    return view('frontend.login');
  }

  public function register($value='')
  {
    return view('frontend.register');
  }
  
}
