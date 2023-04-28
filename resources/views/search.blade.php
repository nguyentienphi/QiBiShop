@extends('layouts.header')
@section('content')
<div style="margin-bottom: 50px">
	<ul id="demo1">
		@foreach($slide as $slides)
		<li>
			<img src="storage/image/slide/{{$slides->image}}">
		</li>
		@endforeach()
	</ul>
</div>
<div class="grid_3 grid_5">
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
	<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
		<div id="myTabContent" class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
				<div class="agile_top_brands_grids">
					@foreach($product as $products)
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid" style="height: 480px">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="{{route('product-detail', $products->id)}}"><img src="storage/image/product/{{$products->image}}" alt=" " height="200px" class=""/> 
													
												</a>
												<p>{{$products->name}}</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
												<p><strong>{{$products->price}}</strong></p>
											</div>
											<div class="snipcart-details top_brand_home_details" >
												<div class="snipcart-details top_brand_home_details">
													@guest
														<a href="" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Thêm vào giỏ hàng</a>
													@else
														<a href="{{route('themgiohang', $products->id)}}" class="btn btn-primary">Thêm vào giỏ hàng</a>
													@endguest
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
						<br>
					</div>
					@endforeach()

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div style="text-align: center">
			{{$product->links()}}
		</div>
	</div>
</div>
@endsection()