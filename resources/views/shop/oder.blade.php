@extends('layouts.header')
@section('title', 'Mua hàng')
@section('content')
<div class="container" style="margin-bottom: 20px;margin-top: 30px">
	<div class="row">
		@if(session()->has('thanhcong'))
			<div class="alert alert-success">
				{{ session('thanhcong') }}
			</div>
		@endif
		{{ Form::open(['route' => 'pay-product', 'method' => 'post']) }}
			<div class="col-md-1">			
			</div>
			<div class="col-md-5">
				<h4 style="text-align: center;margin-bottom: 15px;">Thông tin khách hàng</h4>
				<hr>
				@foreach($profile as $profiles)
					<div class="row">
						<div class="form-group">
							<div class="col-md-3">
								<label>Use name</label>
							</div>
							<div class="col-md-9">
								{{ Form::text('usename', $profiles->name, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="form-group">
							<div class="col-md-3">
								<label>Số cmnd</label>
							</div>
							<div class="col-md-9">
								{{ Form::text('nic_number', $profiles->nic_number, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="form-group">
							<div class="col-md-3">
								<label>Địa chỉ</label>
							</div>
							<div class="col-md-9">
								{{ Form::text('address', $profiles->address, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="form-group">
							<div class="col-md-3">
								<label>Số điện thoại</label>
							</div>
							<div class="col-md-9">
								{{ Form::text('phone_number', $profiles->phone_number, ['class' => 'form-control']) }}
							</div>
						</div>
					</div>
				@endforeach()
			</div>
			<div class="col-md-6">
				<h4 style="text-align: center;margin-bottom: 15px;">Đơn hàng của bạn</h4>
				<hr>
				<div class="row">
					<div class="col-md-5">
						<img src="../storage/image/product/{{$product->image}}" width="200px">
					</div>
					<div class="col-md-7">
						<strong>{{ $product->name }}</strong>
						<br>
						<input type="hidden" name="id_product" value="{{$product->id}}">
						<hr>
						<h5>Số lượng : {{$soluong}}</h5>
						<input type="hidden" name="soluong" value="{{$soluong}}">
						<hr>
						<input type="hidden" name="price" value="{{$product->price}}">
						<h5>Tổng tiền : {{ $product->price*$soluong }}</h5>
						<input type="hidden" name="tongtien" value="{{ $product->price*$soluong }}">
						<hr>
							@foreach($product->stores as $store)
								<input type="hidden" name="id_store" value="{{ $store->id }}">
							@endforeach()
						<h4 style="text-align: center;">Hình thức thanh toán</h4>
						<div style="margin-top: 10px;">

							<label>
								<input type="radio" name="payment" value="1" style="width: 20px;" checked="checked" id="tainha">
								Thanh toán tại nhà
							</label>
							<label>
								<input type="radio" name="payment" value="2" style="width: 20px;" id="tructuyen">
								Online
							</label>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-7"></div>
					<div class="col-md-3">
						{{ Form::submit('Thanh Toán', ['class' => 'btn btn-success']) }}
					</div>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>
@endsection()