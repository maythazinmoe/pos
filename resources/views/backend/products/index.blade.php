@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Product List</h1>
    		<a href="{{route('products.create')}}" class="btn btn-info float-right">Add New</a>
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
    					<th>Sale Price</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($products as $product)
    				<tr>
    					<td>{{$i++}}</td>
    					{{-- <td>{{$product->id}}</td> --}}
    					<td>{{$product->name}}</td>
    					<td>{{$product->sale_price}} MMK</td>
    					<td>
    						<a href="{{route('products.show',$product->id)}}" class="btn btn-outline-primary"><i class="fas fa-info"></i></a>
    						<a href="{{route('products.edit',$product->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
    						<!-- delete function ko write yin form ko use y a tal -->
                           <form action="{{route('products.destroy',$product->id)}}" method="POST" class="d-inline-block">
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