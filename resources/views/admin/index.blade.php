@extends('layouts.admin.index')
@section('content')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-top: 20px">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <img src="../storage/image/admin.jpg" class="img img-circle" width="350px">
                    </div>
                    <div class="col-md-4">
                        <h3>Thông tin tài khoản</h3>
                        <div>
                            <h4><strong>Họ tên: </strong>{{$user->profile->name}}</h4>
                            <h4><strong>Số điện thoại:</strong>{{$user->profile->phone_number}}</h4>
                            <h4><strong>Địa chỉ:</strong>{{$user->profile->address}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection