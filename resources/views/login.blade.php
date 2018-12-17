@extends('layouts.header')
@section('content')
<div class="login">
	<div class="container">
		<h2>Đăng nhập</h2>
		<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
			@if(session()->has('errors'))
				<div class="aler alert-danger">
					<span>{{session('errors')}}</span>
				</div>
			@endif
			{{ Form::open(['route' => 'postLogin', 'method' => 'post']) }}
				{{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'User name...', 'required']) }}
				{{ Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => 'Password...']) }}
				<div class="forgot">
					<a href="#">Quên mật khẩu?</a>
				</div>
				{{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
			{{ Form::close() }}
		</div>
		<p><a href="{{route('register')}}">Đăng ký </a> Hoặc trở lại <a href="{{route('trangchu')}}">Trang chủ<span class="fa fa-home" aria-hidden="true" style="font-size:  20px"></span></a></p>
	</div>
</div>
@endsection()