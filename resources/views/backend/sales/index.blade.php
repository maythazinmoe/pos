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
    					<th>Date</th>
                        <th>Voucher_no</th>
    					<th>User</th>
    					<th>Total</th>
                        <th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($sales as $sale)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$sale->date}}</td>
                        <td>{{$sale->voucher}}</td>
    					<td>{{$sale->user->name}}</td>
    					<td>{{$sale->total}} MMK</td>
    					<td>


                            <a href="{{route('sales.show',$sale->id)}}" class="btn btn-outline-warning"><i class="fas fa-detail"></i>Details</a>
    						
    						{{-- <form action="{{route('sales.destroy',$sale->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to Delete!')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-outline-danger"> --}}
    						
    						<form action="{{route('sales.destroy',$sale->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to Delete!')">
                                @csrf
                                @method('DELETE')
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