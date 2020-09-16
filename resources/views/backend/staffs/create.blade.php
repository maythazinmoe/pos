@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Staff Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('staffs.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			   
			      <div class="form-group row {{ $errors->has('user') ? 'has-error' : '' }}">
			        <label for="inputUser" class="col-sm-2 col-form-label">User</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputUser" name="user">
			            <optgroup label="Choose User">
			              @foreach($users as $user)
			                <option value="{{$user->id}}">{{$user->name}}</option>
			              @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('user') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
			        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			        <div class="col-sm-5">
			          <textarea id="inputAddress" class="form-control" name="address"></textarea>
			          <span class="text-danger">{{ $errors->first('address') }}</span>
			        </div>
			      </div>			      			
			     
			      <div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
			        <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputPhone" name="phone">
			          <span class="text-danger">{{ $errors->first('phone') }}</span>
			        </div>
			      </div>			     
			            
			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputPhoto" name="photo" class="d-block">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
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