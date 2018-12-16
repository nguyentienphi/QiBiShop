@extends('layouts.header')
@section('content')
	<div id="myTabContent" class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
				
				<div class="agile_top_brands_grids">
					@foreach($product_type as $product_types)
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid" style="height: 480px">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="products.html"><img src="/storage/image/product/{{$product_types->image}}" alt=" " height="200px" class=""/> 
													
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
			<div>
				{{$product_type->links()}}
			</div>
	</div>
@endsection()