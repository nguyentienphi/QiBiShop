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
		{{ Form::open(['route' => 'pay-cart', 'method' => 'post']) }}
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
				@foreach($product as $products)
					<div class="row">
						<div class="col-md-4">
							<img src="../storage/image/product/{{$products['items']['image']}}" width="150px">
						</div>
						<div class="col-md-8">
							<p>{{$products['items']['name']}}</p>
							@foreach($products['items']->stores as $store)
								<input type="hidden" name="store_id" value="{{$store->id}}">
							@endforeach()
							<br>
							<p><span>Số lượng : </span>{{ $products['quanty'] }}</p>
							<br>
							<p><span>Đơn giá : </span>{{ $products['items']['price'] }}</p>
						</div>
					</div>
					<hr>   
				@endforeach()
				<h4>Hình thức thanh toán</h4>
				<div style="margin-top: 10px; text-align: center;">
					<label>
						<input type="radio" name="payment" value="1" style="width: 20px;" checked="checked" id="tainha">
						Thanh toán tại nhà
					</label>
					<label>
						<input type="radio" name="payment" value="2" style="width: 20px;" id="tructuyen">
						Online
					</label>
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