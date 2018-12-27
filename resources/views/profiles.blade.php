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
	<div class="register">
		<div class="container">
			<h2>Đăng Ký</h2>
			<div class="login-form-grids">
				<h5>Thông tin hồ sơ</h5>
				{{ Form::open(['route' => 'profile.store']) }}
					{{ Form::text('name', '', ['class' => 'form-control', 'required', 'placeholder' => 'Name...']) }}
					{{ Form::hidden('user_id', $_GET['user']) }}
					@if($errors->has('name'))
						<span style="color: red">
							{{ $errors->first('name') }}
						</span>
					@endif()
					<br>
					{{ Form::text('nic_number', '', ['class' => 'form-control', 'required', 'placeholder' => 'Số CMND...']) }}
					@if($errors->has('nic_number'))
						<span style="color: red">
							{{ $errors->first('nic_number') }}
						</span>
					@endif()
					<br>
					{{ Form::text('address', '', ['class' => 'form-control', 'required', 'placeholder' => 'Địa chỉ...']) }}
					@if($errors->has('address'))
						<p style="color: red">
							{{ $errors->first('address') }}
						</p>
					@endif()
					<br>
					{{ Form::text('phone_number', '', ['class' => 'form-control', 'required', 'placeholder' => 'Số điện thoại...']) }}
					@if($errors->has('phone_number'))
						<p style="color: red">
							{{ $errors->first('phone_number') }}
						</p>
					@endif()
					<br>
				    {{ Form::label('nam', 'Nam') }}
				    {{ Form::radio('gender', 1, ['checked' => 'checked']) }}
				    {{ Form::label('nu', 'Nữ') }}
				    {{ Form::radio('gender', 0) }}
				    <br>
				    {{ Form::date('birthday', '', ['class' => 'form-control', 'required']) }}
					<br>
					{{ Form::submit('Register', ['class' => 'btn btn-primary']) }}
				{{ Form::close() }}
			</div>
			<div class="register-home">
				<a href="{{route('trangchu')}}">Home</a>
			</div>
		</div>
	</div>
@endsection()