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
      		<form action="{{route('sales.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      
			       <div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Date</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="date">
			          <span class="text-danger">{{ $errors->first('date') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="inputPrice" class="col-sm-2 col-form-label">Voucher No</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputPrice" name="voucher" >
			          <span class="text-danger">{{ $errors->first('voucher') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('total') ? 'has-error' : '' }}">
			        <label for="inputPrice" class="col-sm-2 col-form-label">Total</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputPrice" name="total" >
			          <span class="text-danger">{{ $errors->first('total') }}</span>
			        </div>
			      </div>

			      
			    
			      <div class="form-group row {{ $errors->has('status') ? 'has-error' : '' }}">
			        <label for="inputDescription" class="col-sm-2 col-form-label">Status</label>
			        <div class="col-sm-5">
			          <textarea id="inputDescription" class="form-control" name="status"></textarea>
			          <span class="text-danger">{{ $errors->first('status') }}</span>
			        </div>
			      </div>
			      {{-- 
			       <div class="form-group row {{ $errors->has('user') ? 'has-error' : '' }}">
			        <label for="inputDescription" class="col-sm-2 col-form-label">User_Id</label>
			        <div class="col-sm-5">
			          <textarea id="inputDescription" class="form-control" name="user"></textarea>
			          <span class="text-danger">{{ $errors->first('user') }}</span>
			        </div>
			      </div> --}}
			     {{--  <div class="form-group row {{ $errors->has('brand') ? 'has-error' : '' }}">
			        <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
			        <div class="col-sm-5">
  <select class="form-control form-control-md" id="inputBrand" name="brand">
    <optgroup label="Choose Brand">
      @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{$brand->name}}</option>
      @endforeach 
    </optgroup>
  </select>
			          <span class="text-danger">{{ $errors->first('brand') }}</span>
			        </div>
			      </div> --}}
			      {{-- <div class="form-group row {{ $errors->has('subcategory') ? 'has-error' : '' }}">
			        <label for="inputSubcategory" class="col-sm-2 col-form-label">Subcategory</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
			            <optgroup label="Choose Subcategory">
			              @foreach($subcategories as $subcategory)
			                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option> --}}
			          {{--     @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('subcategory') }}</span>
			        </div>
			      </div> --}}
			      
			      {{--
			      <div class="form-group row">
			        <label class="col-sm-2">Brand:</label>

			        <select class="form-control col-sm-5" name="brand">
			          <optgroup label="Choose Brand">
			            @foreach($brands as $brand)
			              <option value="{{$brand->id}}">{{$brand->name}}</option>
			            @endforeach
			          </optgroup>
			        </select>
			      </div>

			      <div class="form-group row">
			        <label class="col-sm-2">Subcategory:</label>

			        <select class="form-control col-sm-5" name="subcategory">
			          <optgroup label="Choose Subcategory">
			            @foreach($subcategories as $subcategory)
			            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
			            @endforeach
			          </optgroup>
			        </select>
			      </div>
						--}}
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