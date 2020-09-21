@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Stock List</h1>
    		<a href="{{route('stocks.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					{{-- <th>ID</th> --}}
    					<th>Date</th>
                        <th>Supplier ID</th>
                        <th>Product ID</th>
                        <th>Quantity</th>
    					<th>Buy Price</th>
                        {{-- <th>Status</th> --}}
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($stocks as $stock)
    				<tr>
    					<td>{{$i++}}</td>
    					{{-- <td>{{$product->id}}</td> --}}
    					<td>{{$stock->date}}</td>
                        <td>{{$stock->supplier->name}}</td>
                        <td>{{$stock->product->name}}</td>
                        <td>{{$stock->quantity}}</td>
    					<td>{{$stock->buy_price}} MMK</td>
                        {{-- <td>{{$stock->status}}</td> --}}
    					<td>
    						
    						<a href="{{route('stocks.edit',$stock->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
    						<!-- delete function ko write yin form ko use y a tal -->
                           <form action="{{route('stocks.destroy',$stock->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to Delete!')">
                                @csrf
                                @method('DELETE')
                                <!-- delete lote yin method ka post nat ma ya buu dar kout method ko delete so pe change pay ya mal update lo myoe pot -->
                                <button class="btn btn-outline-danger "><i class="fas fa-trash"></i></button>
                            </form>
    					</td>
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection