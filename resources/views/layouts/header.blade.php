<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet"> 
<script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
		<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p><a href="{{route('trangchu')}}">QiBiShop</a></p>
			</div>
			<div class="agile-login">
				@guest
					<ul>
						<li><a href="{{route('register')}}"> Đăng Ký </a></li>
						<li><a href="{{route('login')}}"> Đăng Nhập </a></li>
						<li><a href="contact.html"> Giúp Đỡ ! </a></li>
						<li>
							<ul> 
								<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="modal" data-target="#myModal"><i class="fa fa-cart-arrow-down" style="font-size: 20px"></i></a> 
									<div class="modal fade" id="myModal" role="dialog">
									    <div class="modal-dialog">
									    	<div class="modal-content">
										        <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											        <h4 class="modal-title">Thông báo</h4>
										        </div>
										        <div class="modal-body">
										        	<p>Bạn cần đăng nhập để thực hiện dịch vụ</p>
										        </div>
										        <div class="modal-footer">
										        	<a href="{{ route('login') }} " class="btn btn-primary">Đăng nhập</a>
										        	<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
										        </div>
									    	</div> 
									    </div>
  									</div>
  
</div>
								</li> 
							</ul> 
						</li>
					</ul>
				@else
					<ul>
					<li><a href="contact.html"> Giúp Đỡ ! </a></li>
					<li>
						<ul> 
							
							<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cart-arrow-down" style="font-size: 20px"></i>
								@if(session()->has('cart'))
									<span class="badge">{{$cart->totalQuanty}}</span>
								@endif
							</a> 
								<ul class="dropdown-menu" > 
									@if(session()->has('cart'))
										@foreach($product_cart as $products)
											<li style="width: 350px">
												<div style="float: left; width: 70px">
													<img src="/storage/image/product/{{ $products['items']['image'] }}" width="70px" style="float: left">
												</div>
											 	<div style="float: right; width: 230px" id="list-cart">
											 		<ul> 
												 		<li class="list_cart">{{ $products['items']['name'] }}</li>
												 		<br>
												 		<li class="list_cart">Đơn giá: {{$products['items']['price']}}</li>
												 		<li class="list_cart">Số lượng : {{$products['quanty']}}</li>
												 		<br>
												 		<li class="list_cart">
												 			Thành tiền :  {{$products['price']}}
												 		</li>
											 		</ul>
											 	</div>
											</li>
											<hr>
										@endforeach()
										<li>
											<div style="width: 120px; float: left;">
												<h5 >
													<a href="{{ route('view-cart') }}" style="color: blue">Xem giỏ hàng <span>
														<i class="fa fa-sign-out"></i>
													</span></a>
												</h5>
											</div>
											<div style="width: 200px; float: left">
												<p style="text-align: center;"><strong>Tổng tiền : {{$toltalPrice}}</strong></p>
											</div>
										</li>
									@endif
								</ul> 
							</li> 
						</ul> 
						</li>
						<li>  
						<div class="dropdown">
						    <a class="dropdown-toggle"  data-toggle="dropdown">{{ Auth::user()->username }}
						    <span class="caret"></span></a>
						    <ul class="dropdown-menu">
						      <li><a href="{{ route('logout') }}" style="color: black">Logout</a></li>
						    </ul>
						 </div>
						 </li>
					</ul>
			</div>
			@endguest
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="logo_products">
			<div class="container">
				<div class="w3ls_logo_products_left1">
					<ul class="phone_email">
						<li><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ đặt hàng qua : (+0123) 234 567</li>

					</ul>
				</div>
				<div class="w3ls_logo_products_left">
					<h1><a href="{{route('trangchu')}}">QiBi Shop</a></h1>
				</div>
				<div class="w3l_search">
					{{ Form::open(['route' => 'search']) }}
						{{ Form::search('search', '', ['placeholder' => 'Nhập thông tin tìm kiếm']) }}
						{{ Form::button('<i class="fa fa-search" aria-hidden="true"></i>', ['class' => 'btn btn-default search', 'aria-label' => 'Left Align', 'type' => 'submit']) }}
						<div class="clearfix"></div>
					{{ Form::close() }}
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="navigation-agileits">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{route('trangchu')}}" class="act">Trang chủ</a></li>	
							@foreach($parent as $parents)
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$parents->name}}<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="multi-gd-img">
											<ul class="multi-column-dropdown">
												@foreach($type as $types)
												@if($types->id_parent == $parents->id)
												<li><a href="{{route('productType', $types->id)}}">{{ $types->name }}</a></li>
												@endif
												@endforeach()
												
											</ul>
										</div>	

									</div>
								</ul>
							</li>
							@endforeach()
							<li><a href="offers.html">Offers</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div>
			@yield('content')
		</div>

		<div class="footer">
			<div class="container">
				<div class="w3_footer_grids">
					<div class="col-md-3 w3_footer_grid">
						<h3>Liên hệ</h3>

						<ul class="address">
							<li><i class="	fa fa-map-marker" aria-hidden="true" style="font-size: 12px;"> </i>Đà Nẵng</span></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 10px;"></i><a href="">qibishop@gmail.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true" style="font-size: 12px;"></i>+1234 567 567</li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Danh mục</h3>
						<ul class="info"> 
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Groceries</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Household</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Personal Care</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Packaged Foods</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Beverages</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3_footer_grid">
						<h3>Hồ sơ</h3>
						<ul class="info"> 
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">My Cart</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('login')}}">Đăng nhập</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Đăng ký</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

			<div class="footer-copy">

				<div class="container">
					<p>© 2018 QiBiShop | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
			</div>

		</div>	
		<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //footer -->	
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->
		<script src="{{ asset('js/minicart.min.js') }}"></script>
		<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="{{ asset('js/skdslider.min.js')}}"></script>
<link href="{{ asset('css/skdslider.css')}}" rel="stylesheet">
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

		jQuery('#responsive').change(function(){
			$('#responsive_wrapper').width(jQuery(this).val());
		});

	});
</script>
<script type="text/javascript" src="{{asset('js/qibishop.js')}}"></script>	
<script>
$(document).ready( function(){
	$('.dropdown-menu').scroll(function(){
        $("li").css("display", "inline").fadeOut("slow");
    });
});
</script>
</body>
</html>