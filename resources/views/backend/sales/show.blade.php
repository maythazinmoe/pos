@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-md-12 mb-3">
        <h1 class="h3 mb-0 text-gray-800">Voucherno : {{$sale->voucherno}}</h1>
        <h1 class="h3 mb-0 text-gray-800">Date : {{$sale->date}}</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Date</th>
              <th>VoucherNo</th>
              <th>User</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; $total=0; @endphp
            
            {{-- @php 
              $subtotal = $sale->price * $item->pivot->qty;
              $total += $subtotal;
            @endphp --}}
            <tr>
              <td>{{$i++}}</td>
              <td>{{$sale->date}}</td>
<<<<<<< HEAD:resources/views/backend/sales/show.blade.php
              <td>{{$sale->voucher}}</td>
              <td>{{$sale->user->name}}</td>
              <td>{{$sale->saledetails[0]->quantity}}</td>
=======
              <td>{{$sale->voucher_no}}</td>
              <td>{{$sale->total}}</td>
              <td>{{$sale->status}}</td>
              <td>{{$sale->pivot->total}}</td>
>>>>>>> 49176af9eb7af4322695e44e972b6b5d65cdd211:resources/views/backend/sales/show.blade.txt
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