@extends('frontend.layouts.index')
@section('css')
<link href="frontend/css/sweetalert.css" rel="stylesheet">
@endsection
@section('content')
<section>
		<div class="container">
			<div class="row">
				
				
				<div class="col-sm-12">
                <div class="product-details" id="product-details"><!--product-details-->
                <form>
						@csrf
						<input type="hidden" name="gp_id" value="{{$gp_id}}"/>
						<input type="hidden" name="ram" value="{{$selected_product->configuration->ram}}"/>
						<input type="hidden" name="color" value="{{$selected_product->configuration->color}}"/>
							
				</form>
						
					</div><!--/product-details-->
					
										
					
				</div>
			</div>
		</div>
		
	</section>

  @endsection

  @section('script')
  <script src="frontend/js/sweetalert.js"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            loadProduct();
        	// loadComment();
            

            // //ajax
            // $('.post-comment').click(function(){
            // 	var comment = $('.comment').val();
            // 	var id_product = $('.id_product').val();
            	
            // 	var token = $('input[name="_token"]').val();
            // 	//alert(id_product);
            // 	if(comment=="")
            // 	{
            // 		//alert('Không được bỏ trống');
            // 		swal("Không được bỏ trống", "", "error");
            // 	}
            // 	else
            // 	{
            // 		$.ajax({
            //          method:'POST',
            //          url:'/binh-luan',
            //         data:{comment:comment,
            //               id_product:id_product,
            //               _token:token},
            //               success:function(data){
                          	
            //               	// location.reload();
            //               	loadComment();
            //               }
            //         });
            // 	}
            	
            // });
            // //ajax
            // $('.delete-comment').click(function(){
            // 	var comment = $('.comment').val();
            // 	var id_product = $('.id_product').val();
            	
            // 	var token = $('input[name="_token"]').val();
            // 	//alert(id_product);
            // 	$.ajax({
            //          method:'POST',
            //          url:'/binh-luan',
            //         data:{comment:comment,
            //               id_product:id_product,
            //               _token:token},
            //               success:function(data){
                          	
            //               	// location.reload();
            //               	loadComment();
            //               }
            //         });
            //  alert('ss');
            // });
            $('.cart').click(function(){
                alert('ss');
            });
			
			function loadProduct(){
            	var token = $('input[name="_token"]').val();
            	var gp_id=$('input[name="gp_id"]').val();
                var ram = $('input[name="ram"]').val();
                var color = $('input[name="color"]').val();
            	$.ajax({
                     method:'POST',
                     url:'tat-ca-san-pham',
                    data:{
                        gp_id:gp_id,
                        ram:ram,
                        color:color,
                    	_token:token},
                          success:function(data){
                          	$('#product-details').html(data);
                            $('.color').click(function(){
                                    var color=$('.color:checked').val();
                                    var ram=$('.ram:checked').val();
                                    var token = $('input[name="_token"]').val();
                                    var gp_id=$('input[name="gp_id"]').val();
                                    //alert(ram);
                                    $.ajax({
                                        method:'POST',
                                        url:'thay-doi-san-pham',
                                        data:{color:color,
                                                ram:ram,
                                                gp_id:gp_id,
                                                _token:token},
                                                success:function(data){
                                                    $('#product-details').html(data);
                                                    loadProduct();
                                                }
                                        });
                            });
                            $('.ram').click(function(){
                                    var color=$('.color:checked').val();
                                    var ram=$('.ram:checked').val();
                                    var token = $('input[name="_token"]').val();
                                    var gp_id=$('input[name="gp_id"]').val();
                                    //alert(ram);
                                    $.ajax({
                                        method:'POST',
                                        url:'thay-doi-san-pham',
                                        data:{color:color,
                                                ram:ram,
                                                gp_id:gp_id,
                                                _token:token},
                                                success:function(data){
                                                    $('#product-details').html(data);
                                                    loadProduct();
                                                }
                                        });
                            });
                            $('.add-to-cart').click(function(){
                                var id = $('.product_id').val();
                                var product_name = $('.product_name').val();
                                var product_image = $('.product_image' ).val();
                                var product_price = $('.product_price').val();
                                var product_qty = $('.product_qty' ).val();
                                var token = $('input[name="_token"]').val();
                               // swal("Hello world!");
                                //alert(id);

                                $.ajax({
                                        method:'POST',
                                        url:'them-gio-hang',
                                        data:{product_id:id,
                                            product_name:product_name,
                                            product_image:product_image,
                                            product_price:product_price,
                                            product_qty:product_qty,
                                            _token:token},
                                            success:function(){
                                                swal({
                                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                                    
                                                    showCancelButton: true,
                                                    cancelButtonText: "Xem tiếp",
                                                    cancelButtonClass: "btn-danger",
                                                    confirmButtonClass: "btn-success",
                                                    confirmButtonText: "Đi đến giỏ hàng",
                                                    closeOnConfirm: false
                                                },
                                                function() {
                                                    window.location.href = "{{url('/gio-hang')}}";
                                                });

                                            }

                                });

            });
                          }
                    });
            }

            // function loadComment(){
            // 	var token = $('input[name="_token"]').val();
            // 	var id_product = $('.id_product').val();
            // 	$.ajax({
            //          method:'POST',
            //          url:'/tat-ca-binh-luan',
            //         data:{
            //         	 id:id_product,
            //         	_token:token},
            //               success:function(data){
            //               	$('#loadComment').html(data);
            //               }
            //         });
            // }
			
        });
    </script>

  @endsection