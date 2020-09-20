@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Sale Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		{{-- <form action="{{route('sales.store')}}" method="post" enctype="multipart/form-data">
			      @csrf --}}
			    
			      <div class="form-group row {{ $errors->has('status') ? 'has-error' : '' }}">
			        <label for="inputDescription" class="col-sm-2 col-form-label">Products</label>
			        <div class="col-sm-5">
			          <select name="product" class="form-control"  id="product">
			          	<option selected disabled>Choose Product</option>
			          	@foreach($products as $pro)
			          	<option value="{{$pro->id}}" data-name="{{$pro->name}}" data-sale_price="{{$pro->sale_price}}" data-description="{{$pro->description}}">{{$pro->name}}</option>
			          	@endforeach
			          </select>
			          <span class="text-danger">{{ $errors->first('product') }}</span>
			        </div>
			      </div>
			      
			      {{-- <div class="form-group row">
			        <div class="col-sm-5"> --}}
			          <input type="button" class="btn btn-outline-success search float-right" value="Search">
			        {{-- </div> --}}
			      {{-- </div> --}}
			    {{-- </form> --}}
      	</div>
      </div>
    </div>
 	</div>
  <br><br>
 	{{-- <div class="container-fluid"> --}}
		<div class="row">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Product Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody id='tbody'>
            
          </tbody>
        </table>
</div>
 	</div>
  <br>
 <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn w-50 float-right"> 
                  Check Out 
               
@endsection
