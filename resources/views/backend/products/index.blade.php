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
                        <th>Category ID</th>
    					<th>Sale Price</th>
                        <th>Photo</th>
                        <th>Description</th>
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
                        <td>{{$product->category->name}}</td>
    					<td>{{$product->sale_price}} MMK</td>
                        <td><img src="{{asset($product->photo)}}"></td>
                        <td>{{$product->description}}</td>
    					<td>
    						
    						<a href="{{route('products.edit',$product->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
    						<!-- delete function ko write yin form ko use y a tal -->
                           <form action="{{route('products.destroy',$product->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to Delete!')">
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