@extends('backendtemplate')

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Report</h1>
    </div>
    <div class="row">
      <div class="col-md-4">
        <input type="date" name="start_date" class="form-control start_date">
      </div>

      <div class="col-md-4">
        <input type="date" name="end_date" class="form-control end_date">
      </div>

      <div class="col-md-4">
        <input type="submit" name="search" class="btn btn-success btn_search_by_date" value="Search"> 
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-12 mx-auto">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Product Photo</th>
                  <th>Name</th>
                  <th>Price</th>

                  <th>Date</th>
                  <th>QTY</th>
                  <th>Subtotal</th>

                </tr>
              </thead>
              <tbody class="tbody">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   

  </div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $('.btn_search_by_date').click(function(){
      var start_date = $('.start_date').val();
      var end_date = $('.end_date').val();
      // console.log(start_date,end_date);
      $.post('/report',{start_date:start_date,end_date:end_date},function(res){
        var html = '';
        var j=1;
        var subtotal = 0;
        $.each(res,function(i,v){
          // console.log(v.products);
          $.each(v.products,function(a,b){
            console.log(b);
            subtotal+= b.pivot.quantity*b.sale_price;
            // $.each(b.pivot,function(c,d){

          html+=`<tr>
                  <td>${j++}</td>
                  <td><img src='/${b.photo}' width="120px" height = '100px'></td>
                  <td>${b.name}</td>
                  <td>${b.sale_price}</td>

                  <td>${v.date}</td>
                  <td>${b.pivot.quantity}</td>
                  <td>${subtotal}</td>


                  </tr>`;
              // })

          });
        });
        $('.tbody').html(html);
      })
    })
  })
</script>
@endsection