@extends('layouts.header')
@section('title', 'Giỏ hàng')
@section('content')
	@if(session()->has('cart'))
		@if(session()->has('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
		@endif
		<div class="container" style="margin:10px 50px 10px 100px;">
			<div class="row">
				<table class="table table-hover">
				    <thead>
					    <tr>
					        <th>Tên Sản phẩm</th>
					        <th>Hình ảnh</th>
					        <th>Đơn giá</th>
					        <th>Số lượng</th>
					        <th>Thành tiền</th>
					        <th>Hành động</th>
					    </tr>
				    </thead>
				    <tbody>
					   @foreach($product as $products)
						   	<tr>
						        <td>{{  $products['items']['name'] }}</td>
						        <td><img src="../storage/image/product/{{$products['items']['image']}}" width="100px"></td>
						        <td>{{  $products['items']['price'] }}</td>
						        <td>{{  $products['quanty'] }}</td>
						        <td>{{  $products['price'] }}</td>
						        <td><a href="{{route('delete-cart', $products['items']['id'])}}" class="delete">Xóa</a></td>
						    </tr>
					   @endforeach()
				    </tbody>
		  		</table>
		  		<div>
		  			<strong>Tổng tiền: {{$totalPrice}}</strong>
		  		</div>
		  		<br>
				<div style="text-align: center;">
					<a href="{{route('dathang')}}" class="btn btn-success">Thanh toán</a>
				</div>
			</div>
		</div>
	@else
		<div style="margin:10px 50px 10px 100px; text-align: center;">
			<h5>Không có sản phẩm nào trong giỏ hàng</h5>
		</div>
	@endif
@endsection()