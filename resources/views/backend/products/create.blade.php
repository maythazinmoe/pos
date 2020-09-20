@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Product Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      {{-- <div class="form-group row">
			        <label for="inputId" class="col-sm-2 col-form-label">ID</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputId" name="id">
			          <span class="text-danger">{{ $errors->first('id') }}</span>
			        </div>
			      </div> --}}

			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputPhoto" name="photo" class="d-block">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('sale_price') ? 'has-error' : '' }}">
			        <label for="inputSalePrice" class="col-sm-2 col-form-label">Sale Price</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputSalePrice">
			          <span class="text-danger">{{ $errors->first('sale_price') }}</span>
			        </div>
			      </div>
			     
			      <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
			        <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
			        <div class="col-sm-5">
			          <textarea id="inputDescription" class="form-control" name="description"></textarea>
			          <span class="text-danger">{{ $errors->first('description') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('category') ? 'has-error' : '' }}">
			        <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputCategory" name="name">
			            <optgroup label="Choose Category">
			              @foreach($categories as $category)
			                <option value="{{$category->id}}">{{$category->name}}</option>
			              @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('category') }}</span>
			        </div>
			      </div>
			      
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