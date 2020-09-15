@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Sales List</h1>
    		<a href="{{route('sales.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Product_Name</th>
                        <th>Voucher_no</th>
    					<th>User</th>
    					<th>Price</th>
    					<th>Total</th>
                        <th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($sales as $sale)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$sale->name}}</td>
                        <td>{{$sale->voucher_no}}</td>
    					<td>{{$sale->user->name}}</td>
                        <td>{{$sale->description}}</td>
                        <td>{{$sale->name}}</td>
    					<td>{{$sale->price}} MMK</td>
                        <td>{{$sale->total}} MMK</td>

    					<td>
    						<a href="#" class="btn btn-primary">Detail</a>
    						<a href="{{route('sales.edit',$sale->id)}}" class="btn btn-warning">Edit</a>
    						<a href="#" class="btn btn-danger">Delete</a>
    					</td>
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection