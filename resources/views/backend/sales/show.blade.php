@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
    <!-- Page Heading -->
    {{-- <div class="row">
      <div class="col-md-12 mb-3">
        <h1 class="h3 mb-0 text-gray-800">Voucherno : {{$sale->voucherno}}</h1>
        <h1 class="h3 mb-0 text-gray-800">Date : {{$sale->date}}</h1>
      </div>
    </div> --}}
    
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Date</th>
              <th>VoucherNo</th>
              <th>User</th>
              <th>Product Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; $total=0; @endphp
            
            @php 
              $subtotal = $sale->price * $sale->pivot->quantity;
              $total += $subtotal;
            @endphp
            <tr>
              <td>{{$i++}}</td>
              <td>{{$sale->date}}</td>
              <td>{{$sale->voucher}}</td>
              <td>{{$sale->user->name}}</td>
              <td>{{$sale->description}}</td>
              <td>{{$sale->sale_price}}</td>
              {{-- <td>{{$sale->qty}}</td> --}}
             @foreach($sale->products as $detail)
              <td>{{$detail->pivot->quantity}}</td>
              @endforeach
              <td>
                {{$sale->total}}
              </td>
            </tr>
            {{-- @endforeach --}}

            <tr class="bg-dark text-white">
              <td colspan="5">Total:</td>
              <td>{{$sale->total}} MMK</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
@endsection