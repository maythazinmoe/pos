@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Stock Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('stocks.store')}}" method="post">
			      @csrf
			      {{-- <div class="form-group row">
			        <label for="inputId" class="col-sm-2 col-form-label">ID</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputId" name="id">
			          <span class="text-danger">{{ $errors->first('id') }}</span>
			        </div>
			      </div> --}}

			      <div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
			        <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
			        <div class="col-sm-5">
			          <input type="date" class="form-control" id="inputDate" name="date">
			          <span class="text-danger">{{ $errors->first('date') }}</span>
			        </div>
			      </div>

			       <div class="form-group row {{ $errors->has('supplier') ? 'has-error' : '' }}">
			        <label for="inputSupplier" class="col-sm-2 col-form-label">Supplier ID</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputSupplier" name="supplier">
			            <optgroup label="Choose Supplier">
			              @foreach($suppliers as $supplier)
			                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
			              @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('supplier') }}</span>
			        </div>
			      </div>
			      
			       <div class="form-group row {{ $errors->has('product') ? 'has-error' : '' }}">
			        <label for="inputProduct" class="col-sm-2 col-form-label">Product ID</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputProduct" name="product">
			            <optgroup label="Choose Product">
			              @foreach($products as $product)
			                <option value="{{$product->id}}">{{$product->name}}</option>
			              @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('product') }}</span>
			        </div>
			      </div>

			       <div class="form-group row {{ $errors->has('quantity') ? 'has-error' : '' }}">
			        <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputQuantity" name="quantity">
			          <span class="text-danger">{{ $errors->first('quantity') }}</span>
			        </div>
			      </div>
			      
			      <div class="form-group row {{ $errors->has('buy_price') ? 'has-error' : '' }}">
			        <label for="inputBuyPrice" class="col-sm-2 col-form-label">Buy Price</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputBuyPrice" name="buy_price">
			          <span class="text-danger">{{ $errors->first('buy_price') }}</span>
			        </div>
			      </div>
			     
			      {{-- <div class="form-group row {{ $errors->has('status') ? 'has-error' : '' }}">
			        <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputStatus" name="status">
			          <span class="text-danger">{{ $errors->first('status') }}</span>
			        </div>
			      </div> --}}
			     
			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Create">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection