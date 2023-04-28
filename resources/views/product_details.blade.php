@extends('layouts.header')
@section('title', $product->name)
@section('content')
	@if(session()->has('thanhcong'))
		<div class="alert alert-success">
			{{session('thanhcong')}}
		</div>
	@endif
	<div class="container" style="margin-bottom: 20px">
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
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<div class="col-md-5">
					<img src="../storage/image/product/{{$product->image}}" width="300px" style="margin-top: 20px">
				</div>
				<div class="col-md-7">
					<h4 style="margin-top: 50px">{{$product->name}}</h4>
					<hr>
					<p><strong>Đơn giá : {{$product->price}}</strong></p>
					<hr>
					<div>
						{{ Form::open(['route' => 'check-oder']) }}
							<input type="hidden" name="id_sp" value="{{$product->id}}">
							<div class="form-group">
								{{ Form::label('Số lượng')}}
								{{ Form::text('soluong', '', ['required' => 'required']) }}
							</div>
							@if($errors->has('soluong'))
								<p style="color: red;">{{ $errors->first('soluong') }}</p>
							@endif
							@guest
								<div class="form-group">
									{{ Form::submit('Đặt hàng', ['class' => 'btn btn-success', 'data-toggle' => 'modal', 'data-target' => '#myModal']) }}
									<a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Thêm vào giỏ hàng</a>
								</div>
							@else
								<div class="form-group">
									{{ Form::submit('Đặt hàng', ['class' => 'btn btn-success']) }}
									<a href="{{ route('themgiohang', $product->id) }}" class="btn btn-success" >Thêm vào giỏ hàng</a>
								</div>
							@endguest
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<div class="row">
					<h4>Đánh giá của khách hàng:</h4>
				</div>
				<br>
				<hr>
				<div class="row">
					<h4>Viết đánh giá</h4>
					<br>
					{{ Form::open() }}
					{{ Form::textarea('commnet', '', ['class' => 'form-control', 'rows' => '5']) }}
					<br>
					{{ Form::submit('comment', ['class' => 'btn btn-primary']) }}
				{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection()