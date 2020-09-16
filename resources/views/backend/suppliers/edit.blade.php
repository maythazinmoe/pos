@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Supplier Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('suppliers.update',$supplier->id)}}" method="post">
			      @csrf
			      @method('PUT')
			      {{-- <div class="form-group row">
			        <label for="inputId" class="col-sm-2 col-form-label">ID</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputId" name="id" value="{{$product->id}}" readonly="readonly">
			          <span class="text-danger">{{ $errors->first('id') }}</span>
			        </div>
			      </div> --}}

			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$supplier->name}}">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>
			      
			      <div class="form-group row {{ $errors->has('company_name') ? 'has-error' : '' }}">
			        <label for="inputCompanyName" class="col-sm-2 col-form-label">Company Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputCompanyName" name="company_name"  value="{{$supplier->company_name}}">
			          <span class="text-danger">{{ $errors->first('company_name') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
			        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			        <div class="col-sm-5">
			          <input type="email" class="form-control" id="inputEmail" name="email" value="{{$supplier->email}}">
			          <span class="text-danger">{{ $errors->first('email') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
			        <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputPhone" name="phone" value="{{$supplier->phone}}">
			          <span class="text-danger">{{ $errors->first('phone') }}</span>
			        </div>
			      </div>
    
			      <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
			        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			        <div class="col-sm-5">
			          <textarea id="inputAddress" class="form-control" name="address">{{$supplier->address}}</textarea>
			          <span class="text-danger">{{ $errors->first('address') }}</span>
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