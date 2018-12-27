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
				<h5>Thông tin đăng nhập</h5>
				<div>
					@if(session()->has('success'))
						<p class="alert alert-success">{{ session('success') }}</p>
					@endif()
				</div>
				{{ Form::open(['route' => 'register.store']) }}
					{{ Form::text('username', '', ['class' => 'form-control', 'required', 'placeholder' => 'User name...']) }}
					@if($errors->has('username'))
						<p class="error">
							{{ $errors->first('username') }}
						</p>
					@endif()
					{{ Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => 'password...']) }}
					@if($errors->has('password'))
						<p class="error">
							{{ $errors->first('password') }}
						</p>
					@endif()
					{{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation...']) }}
					{{ Form::submit('Continue', ['class' => 'btn btn-primary']) }}
				{{ Form::close() }}
			</div>
			<div class="register-home">
				<a href="{{route('trangchu')}}">Home</a>
			</div>
		</div>
	</div>
@endsection()