<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
// Frontend

 Route::get('/','PageController@home')->name('homepage');
 Route::get('/about','PageController@about')->name('aboutpage');
 Route::get('/contact','PageController@contact')->name('contactpage');

 Route::get('loginpage','PageController@login')->name('loginpage');

// Route::get('detail/{id}','PageController@itemdetail')->name('itemdetailpage');

// Route::get('promotions','PageController@promotions')->name('promotionspage');

// Route::get('itemsbybrand/{id}','PageController@itemsbybrand')->name('itemsbybrandpage');

// Route::get('filteritems','PageController@filteritems')->name('filteritemspage');

// Route::get('shoppingcart','PageController@shoppingcart')->name('shoppingcartpage');

// Route::get('login','PageController@login')->name('loginpage');

// Route::get('register','PageController@register')->name('registerpage');

// Backend---------------------------
// Route::resource('orders','OrderController');

// Route::middleware('role:Admin')->group(function () {

  Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
 //Route::resource('categories','CategoryController');

Route::middleware('role:Admin')->group(function () {

  //Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
  Route::resource('products','ProductController');
  Route::resource('categories','CategoryController');
  Route::resource('suppliers','SupplierController');
  Route::resource('stocks','StockController');
  Route::resource('staffs','StaffController');
});
// >>>>>>> 4cc8d6b9a6b75427a20ad916285647a4ae333941

 
  Route::resource('sales','SaleController');
  Route::resource('saledetails','SaledetailController');
 
//});

Auth::routes();

Route::get('loginform','PageController@login')->name('loginpage');
Route::get('/home', 'HomeController@index')->name('home');