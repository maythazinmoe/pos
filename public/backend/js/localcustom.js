$(document).ready(function(){
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	showdata();
	// shownoticount();

	// click add to cart and get data
	$('.search').click(function(){
		var id = $('#product').val();
		var name = $('select#product').find(':selected').data('name');
		var sale_price = $('select#product').find(':selected').data('sale_price');
		var description = $('select#product').find(':selected').data('description');
		// var photo=$('select#product').find(':selected').data('photo');
		

		// this = get data from button 
		// console.log(id);


		// create object
		var data = {
				id:id,
				name:name,
				description:description,
				sale_price:sale_price,
				// photo:photo,
				qty:1
			};
			console.log(data);
		// console.log(typeof(item));
		// typeof = get data tyep eg(array||object||string)


		var mycart = localStorage.getItem('item');
	// 	// if we do not have localstorage create new array


		if(!mycart){
			var myitem = new Array();
		}else{
			var myitem = JSON.parse(mycart);
		}



		var hasid = false;
		$.each(myitem,function(i,v){
			if(v.id == id){
				hasid = true;
				v.qty++;
			}
		})
		if(!hasid){
			myitem.push(data);
		}
		// console.log(data);

		localStorage.setItem('item', JSON.stringify(myitem));
		showdata();
		// shownoticount();


	});



	function showdata(){
		var mycart = localStorage.getItem('item');
		if(mycart){
			var mycart_obj = JSON.parse(mycart);
			

			var showtable = "";
			var j = 1;

			// loop obj
			$.each(mycart_obj,function(i,v){
				console.log(v);
				showtable += `<tr>
								<td>${j++}</td>
								<td>${v.name}</td>
								<td>${v.description}</td>
								<td>${v.sale_price}</td>
								<td>${v.qty}</td>
								<td>${v.qty*v.sale_price}</td>
							</tr>`;
			});

			$('#tbody').html(showtable);
		}
	}

$('.checkoutbtn').on('click',function(){
	
    var mycart = localStorage.getItem("item");
    console.log(mycart); // string
    if (mycart) {
       var shop_data = JSON.parse(mycart);

      $.post('/sales',{shop_data:shop_data},function(response){
        if (response) {
          alert(response);
          localStorage.clear();
          showdata();
          window.location.href="/sales";
        }
        console.log('response');
        // $('#tbody').html(showtable);
      })

    }

  })



// 	//qty plus
// 	$('#tbody').on('click','.plus_btn',function(){
// 		var id = $(this).data('id');
// 		var mycart = localStorage.getItem('item');
// 		if(mycart)
// 		{
// 			var mycart_obj = JSON.parse(mycart);
// 			$.each(mycart_obj,function(i,v){
// 				if (i == id) {
// 					v.qty++;
// 				}
// 			});
// 			localStorage.setItem('item',JSON.stringify(mycart_obj));
// 			showdata();
// 			shownoticount();
// 		}

// 	})


// 	// qty minus

// 	$('#tbody').on('click','.minus_btn',function(){
// 		var id = $(this).data('id');
// 		var mycart = localStorage.getItem('item');
// 		if(mycart)
// 		{
// 			var mycart_obj = JSON.parse(mycart);
// 			$.each(mycart_obj,function(i,v){
// 				if (i == id) {
// 					v.qty--;

// 					if(v.qty==0)
// 					{
// 						var ans = confirm("Are you sure to reduce?");
// 						if(ans){
// 							mycart_obj.splice(i,1);
// 						}else{
// 							v.qty=1;
// 						}
// 					}

// 				}

// 			});
// 			localStorage.setItem('item',JSON.stringify(mycart_obj));
// 			showdata();
// 			shownoticount();
// 		}
// 	})


// 	// delete data
// 	$('#tbody').on('click','.delete',function(){
// 		var id = $(this).data('id');
// 		var mycart = localStorage.getItem('item');
// 		if(mycart)
// 		{
// 			var mycart_obj = JSON.parse(mycart);
// 			$.each(mycart_obj,function(i,v){
// 				if (i == id) {
// 					var ans = confirm("Are you sure to reduce?");
// 					if(ans){
// 						mycart_obj.splice(i,1);
// 					}else{
// 						v.qty=1;
// 					}
// 				}

// 			});
// 			localStorage.setItem('item',JSON.stringify(mycart_obj));
// 			showdata();
// 			shownoticount();
// 		}
// 	})


// 	// show count noti
// 	function shownoticount(){
// 		var mycart = localStorage.getItem('item');
// 		if(mycart){
// 			var noti = 0;
// 			var mycart_obj = JSON.parse(mycart);
// 			$.each(mycart_obj,function(i,v){
// 				noti+=v.qty;
// 			});
// 			$('.noti').html(noti);
// 		}
// 	}
// })
});