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
	<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
		<ul id="myTab" class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Sản Phẩm</a></li>
			<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Khuyến Mãi</a></li>
		</ul>
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
												<a href="products.html"><img src="storage/image/product/{{$products->image}}" alt=" " height="200px" class=""/> 
													
												</a>
												<p>{{$products->name}}</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
												<h4>{{$products->price}}
													
												</h4>
											</div>
											<div class="snipcart-details top_brand_home_details" >
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Pepsi soft drink" />
														<input type="hidden" name="amount" value="40.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button" style="margin-top: 40px"/>
													</fieldset>
												</form>
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
			<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
				<div class="agile_top_brands_grids">
					@foreach($discount as $discounts)
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid" style="height: 480px">
								<div class="agile_top_brand_left_grid_pos">
									<img src="storage/image/icons/offer.png" alt=" " class="img-responsive"/>
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img src="storage/image/product/{{$discounts->image}}" alt=" " height="200px" class=""/> 
													
												</a>
												<p>{{$discounts->name}}</p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
												<h4>
													{{ $discounts->price - ($discounts->price*$discounts->discount_rate) }}
													<span>{{$discounts->price}}</span>
												</h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Pepsi soft drink" />
														<input type="hidden" name="amount" value="40.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button" />
													</fieldset>
												</form>
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