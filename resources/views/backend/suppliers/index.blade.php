@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Supplier List</h1>
    		<a href="{{route('suppliers.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					{{-- <th>ID</th> --}}
    					<th>Name</th>
                        <th>Company Name</th>
    					<th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($suppliers as $supplier)
    				<tr>
    					<td>{{$i++}}</td>
    					{{-- <td>{{$product->id}}</td> --}}
    					<td>{{$supplier->name}}</td>
                        <td>{{$supplier->company_name}}</td>
    					<td>{{$supplier->email}}</td>
                        <td>{{$supplier->phone}}</td>
                        <td>{{$supplier->address}}</td>
    					<td>
    						
    						<a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
    						<!-- delete function ko write yin form ko use y a tal -->
                           <form action="{{route('suppliers.destroy',$supplier->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to Delete!')">
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