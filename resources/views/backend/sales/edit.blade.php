@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Sale Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('sales.update',$sale->id)}}" method="post" enctype="multipart/form-data">
			      @csrf
			      @method('PUT')
			      {{-- <div class="form-group row">
			        <label for="inputId" class="col-sm-2 col-form-label">ID</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputId" name="id" value="{{$product->id}}" readonly="readonly">
			          <span class="text-danger">{{ $errors->first('id') }}</span>
			        </div>
			      </div> --}}

			      <div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Date</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$sale->date}}">
			          <span class="text-danger">{{ $errors->first('date') }}</span>
			        </div>
			      </div>
			      
			     
			      <div class="form-group row {{ $errors->has('voucherno') ? 'has-error' : '' }}">
			        <label for="inputSalePrice" class="col-sm-2 col-form-label">Voucher No</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputSalePrice" name="sale_price" value="{{$sale->voucherno}}">
			          <span class="text-danger">{{ $errors->first('voucherno') }}</span>
			        </div>
			      </div>
			      
			     

			      {{-- <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="inputSalePrice" class="col-sm-2 col-form-label">Price</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputSalePrice" name="sale_price" value="{{$sale->price}}">
			          <span class="text-danger">{{ $errors->first('price') }}</span>
			        </div>
			      </div> --}}

			      <div class="form-group row {{ $errors->has('total') ? 'has-error' : '' }}">
			        <label for="inputSalePrice" class="col-sm-2 col-form-label">Total</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputSalePrice" name="total" value="{{$sale->total}}">
			          <span class="text-danger">{{ $errors->first('total') }}</span>
			        </div>
			      </div>

			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection