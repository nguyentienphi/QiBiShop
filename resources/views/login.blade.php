@extends('layouts.header')
@section('content')
<div class="login">
	<div class="container">
		<h2>Đăng nhập</h2>
		
		<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
			<form>
				<input type="email" placeholder="Email Address" required=" " >
				<input type="password" placeholder="Password" required=" " >
				<div class="forgot">
					<a href="#">Quên mật khẩu?</a>
				</div>
				<input type="submit" value="Login">
			</form>
		</div>
		<p><a href="{{route('register')}}">Đăng ký </a> Hoặc trở lại <a href="{{route('trangchu')}}">Trang chủ<span class="fa fa-home" aria-hidden="true" style="font-size:  20px"></span></a></p>
	</div>
</div>
@endsection()