@extends('layouts.header')
@section('title', 'Đăng ký')
@section('content')
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{route('trangchu')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Đăng Ký</h2>
			<div class="login-form-grids">
				<h5>Thông tin hồ sơ</h5>
				<form action="{{route('register.store')}}" method="POST">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input type="text" placeholder="Name..."  class="form-control" name="name">
					<input type="text" placeholder="Số CMND..."  class="form-control">
					<br>
					<input type="text" placeholder="Địa chỉ..." class="form-control">
					<br>
					<input type="text" placeholder="Số điện thoại..."  class="form-control">
					<br>
					<input id="male" type="radio" name="gender" value="nam" checked="checked">
				    <label for="male">Nam</label>
				    <input id="female" type="radio" name="gender" value="nu">
				    <label for="female">Nữ</label>
				    <br>
				    <input type="date" name="ngaysinh" placeholder="Ngày sinh..." style="margin-top: 10px" class="form-control">
					<br>
					<input type="email" placeholder="Email Address" required=" " class="form-control" name="email">
					<input type="password" placeholder="Password" required=" " class="form-control">
					<input type="password" placeholder="Password Confirmation" required=" " class="form-control">
					<input type="submit" value="Register">
				</form>
			</div>
			<div class="register-home">
				<a href="{{route('trangchu')}}">Home</a>
			</div>
		</div>
	</div>
@endsection()