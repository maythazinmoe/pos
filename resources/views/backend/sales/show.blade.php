@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-md-12 mb-3">
        <h4 class="h3 mb-0 text-gray-800">Voucherno : {{$sale->voucher_no}}</h4>
        <h4 class="h3 mb-0 text-gray-800">Date : {{$sale->date}}</h4>
        <h4 class="h3 mb-0 text-gray-800">User : {{$sale->user->name}}</h4>

      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Photo</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Subtotal</th>
              
            </tr>
          </thead>
          <tbody>
            @php $i=1; $total=0; $subtotal=0; @endphp
            
            @foreach($sale->products as $sale_product)
            @php
              $subtotal= $sale_product->pivot->quantity*$sale_product->sale_price;
              $total+=$subtotal;
            @endphp
            <tr>
              <td>{{$i++}}</td>
              <td><img src="{{asset($sale_product->photo)}}" width="120px" height="100px"></td>
              <td>{{$sale_product->name}}</td>
              <td>{{$sale_product->category->name}}</td>
              <td>{{$sale_product->sale_price}}</td>
              <td>{{$sale_product->pivot->quantity}}</td>
              <td>{{$subtotal}}</td>


             
              {{-- <td>{{$sale->qty}}</td> --}}
             
            </tr>
            @endforeach
            {{-- @endforeach --}}

            <tr class="bg-dark text-white">
              <td colspan="6">Total:</td>
              <td>{{$sale->total}} MMK</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection