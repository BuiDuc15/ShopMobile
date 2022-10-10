<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>@yield('title')</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{ asset('public/frontend/assets/img/favicon.ico') }}" type="image/x-icon" />

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="{{ asset('public/frontend/assets/css/vendor.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{ asset('public/frontend/assets/css/style.css') }}" rel="stylesheet">
    <!-- Sweetalert.css -->
    <link href="{{ asset('public/frontend/assets/css/sweetalert.css') }}" rel="stylesheet">
    <!-- LightSlider -->
    <link href="{{ asset('public/frontend/assets/css/lightgallery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/assets/css/lightslider.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/assets/css/prettify.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



    {{--  <link href="{{ asset('public/frontend/assets/css/style-2.css') }}" rel="stylesheet">  --}}



</head>

<body>


    @include('shop.layouts.header');
    @yield('content');
    @include('shop.layouts.footer');


    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- All vendor & plugins & active js include here -->
    <!--All Vendor Js -->
    <script src="{{ asset('public/frontend/assets/js/vendor.js') }}"></script>
    <!-- Active Js -->
    <script src="{{ asset('public/frontend/assets/js/active.js') }}"></script>

    <script src="{{ asset('public/frontend/assets/js/sweetalert.js') }}"></script>

    <!-- LightSlider -->
    <script src="{{ asset('public/frontend/assets/js/lightgallery-all.min.js') }}"></script>

    <script src="{{ asset('public/frontend/assets/js/lightslider.js') }}"></script>

    <script src="{{ asset('public/frontend/assets/js/prettify.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- loc sp theo gia -->
	<script>
  $( function() {
    $( "#slider-range" ).slider({
      orientation: "horizontal",
      range: true,
      min: 0,
      max: 100,
      value: 60,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
      }
    });
    $( "#amount" ).val( $( "#slider-vertical" ).slider( "value" ) );
  } );
  </script>



    <!-- Ajax xác nhận đơn hàng -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.send_order').click(function(){

                swal({
                    title: "Bạn Có Muốn Thanh Toán?",
                    text: "Đơn Hàng Của Bạn Sẽ Được Xác Nhận",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Có,Tôi Muốn !",
                    cancelButtonText: "No,!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                    },
                    function(isConfirm) {
                    if (isConfirm) {
                        var shipping_name = $('.shipping_name').val();
                        var shipping_email = $('.shipping_email').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_note = $('.shipping_note').val();
                        var shipping_method = $('.payment_select').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: "{{ url('/comfirm-order') }}",
                            method: 'POST',
                            data:{shipping_name:shipping_name,shipping_email:shipping_email,shipping_address:shipping_address,
                                shipping_phone:shipping_phone,shipping_note:shipping_note,order_coupon:order_coupon,_token:_token,shipping_method:shipping_method },
                                success:function(){
                                    swal("Đơn Hàng!", "Đơn Hàng Của Bạn Đã Được Gửi Thành Công.", "success");
                                }
                        });
                            // window.setTimeout(function(){ 
                            //     window.location.href = "{{url('/history-order')}}";
                            // } ,3000);
                        
                    } else {
                        swal("Đóng", "Đơn Hàng Của Bạn Đã Chưa Được Thanh Toán", "error");
                    }
                    });
                
               
            });
        });

    </script>

    <!-- LIghtSlider -->
    <script  type="text/javascript">
          $(document).ready(function() {
                $('#imageGallery').lightSlider({
                    gallery:true,
                    item:1,
                    loop:true,
                    thumbItem:4,
                    slideMargin:0,
                    enableDrag: false,
                    currentPagerPosition:'left',
                    onSliderLoad: function(el) {
                        el.lightGallery({
                            selector: '#imageGallery .lslide'
                        });
                    }   
                });  
            });
    </script>

    


    <!-- Thêm sp vào giỏ hàng -->
    <script type="text/javascript">
        $(document).ready(function(){
            cart();
            // show - cart
            function cart(){
                $.ajax({
						url: "{{ url('show-cart') }}",
						method: "GET",
						success:function(data){
							$('#show-cart').html(data);
                            
						}
                        
					 });
            }
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: "{{ route('add-cart-ajax') }}",
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token :_token },
                        success:function(){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                    },
                                    function(){
                                    window.location.href = "{{ route('cart') }}"
                                 });
                                 cart();
                        }
                });
            });
        });
    </script>

<!-- thêm sp vào giỏ hàng ở trang detail -->
<script type="text/javascript">
        $(document).ready(function(){
            cart();
            // show - cart
            function cart(){
                $.ajax({
						url: "{{ url('show-cart') }}",
						method: "GET",
						success:function(data){
							$('#show-cart').html(data);
                            
						}
                        
					 });
            }
            $('.add-to-cart2').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: "{{ route('add-cart-ajax') }}",
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token :_token },
                        success:function(){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                    },
                                    function(){
                                    window.location.href = "{{ route('cart') }}"
                                 });
                                 cart();
                        }
                });
            });
        });
    </script>

<script type="text/javascript">
        $(document).ready(function(){
            cart();
            // show - cart
            function cart(){
                $.ajax({
						url: "{{ url('show-cart') }}",
						method: "GET",
						success:function(data){
							$('#show-cart').html(data);
                            
						}
                        
					 });
            }
            $('.add-to-cart3').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: "{{ route('add-cart-ajax') }}",
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token :_token },
                        success:function(){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                    },
                                    function(){
                                    window.location.href = "{{ route('cart') }}"
                                 });
                                 cart();
                        }
                });
            });
        });
    </script>

<script type="text/javascript">
        $(document).ready(function(){
            // hover-cart
            hover_cart();
            cart();

            function hover_cart(){
                $.ajax({
						url: "{{ url('hover-cart') }}",
						method: "GET",
						success:function(data){
							$('.hover-cart').html(data);
                            
						}
                        
					 });
            }

            
            // show - cart
            function cart(){
                $.ajax({
						url: "{{ url('show-cart') }}",
						method: "GET",
						success:function(data){
							$('#show-cart').html(data);
                            
						}
                        
					 });
            }


            $('.add-to-cart4').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: "{{ route('add-cart-ajax') }}",
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token :_token },
                        success:function(){
                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                    },
                                    function(){
                                    window.location.href = "{{ route('cart') }}"
                                 }); 
                                 
                                 hover_cart();
                                 
                                 cart();
                                
                        }
                });
            });
        });
    </script>

    <!-- ====== Loc Sp ========= -->
                <script type="text/javascript">
                    $(document).ready(function(){

                        $('#sort').on('change',function(){

                            var url = $(this).val(); 
                            // alert(url);
                            if (url) { 
                                window.location = url;
                            }
                            return false;
                        });

                     }); 
                </script>
<!-- ==================== Loc san pham theo danh muc ======================== -->
                            <script type="text/javascript">
                                                $('.category-filter').click(function(){
                                                    var category = [], tempArray = [];

                                                    $.each($("[data-filters='category']:checked"),function(){
                                                        tempArray.push($(this).val());
                                                    });

                                                    tempArray.reverse();
                                                    if (tempArray.length !==0 ) {
                                                        category+='?cate='+tempArray.toString();
                                                    }
                                                    window.location.href = category

                                                });
                                </script>

</body>



</html>
