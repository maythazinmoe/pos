@extends('frontendtemplate')

@section('content')
 <div style="background-color: #f7d7e4"><br>
	<div class="container" id="contact" style="border-radius: 20px;">
	<form> 
		<h1 style="font-size:50px;font-family: cursive; color:green; font-variant: small-caps; text-align: center;">Contact Us</h1>
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" id="inputName">
  </div>
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPhone">Phone No</label>
      <input type="text" class="form-control" id="inputPhone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group">
	<label for="inputAddress">Address</label>
	<textarea id="inputAddress" class="form-control">	
	</textarea>
</div>
 <center>
  <button type="submit" class="btn btn-success w-100">Leave a mesage</button></center>
  <br>
  <h5>Customer Support</h5>
  <h6>Call us: +9977114521</h6>
  <h6>Email: sale4u@gmail.com</h6><br>
</form>
	</div><br>
</div>

  <div class="bg-secondary">
    <div class="container">
      <div class="row py-5">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <h5><b>TOWNSHIPS</b></h5><br>
          <p>Sanchaung<p>
          <p>Thingangyun</p>
          <p>Hlaing</p>
          <p>South Dagon</p>
          <p>&& many more...</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <h5><b>PRODUCTS</b></h5><br>
          <p>Milk & Crub</p>
          <p>Julice</p>
          <p>Fruits & Vegetable</p>
          <p>Chocolate & Ice-cream</p>
          <p>&& many more...</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <h5><b>ABOUT US</b></h5><br>
          <p>Company Information<p>
          <p>Careers</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
         <h5><b>VISIT US</b></h5><br>
          <p>www.sale4u.com<p>
        </div>
      </div>
    </div>
  </div>


@endsection