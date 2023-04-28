@extends('layouts.header')
@section('title', 'Sản phẩm theo danh mục')
@section('content')
	<div id="myTabContent" class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
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
				<div class="agile_top_brands_grids">
					@foreach($product_type as $product_types)
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid" style="height: 480px">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="{{ route('post-detail', $product_types->id) }}"><img src="/storage/image/product/{{$product_types->image}}" alt=" " height="200px" class=""/> 
													
												</a>
												<p>{{$product_types->name}}</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
												<h4>{{$product_types->price}}
													
												</h4>
											</div>
											<div class="snipcart-details top_brand_home_details" >
												@guest
													<a href="" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Thêm vào giỏ hàng</a>
												@else
													<a href="{{route('themgiohang', $product_types->id)}}" class="btn btn-primary">Thêm vào giỏ hàng</a>
												@endguest
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
			<div>
				{{$product_type->links()}}
			</div>
	</div>
@endsection()