@extends('layouts.admin.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cửa hàng
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                        {{ Form::open(['route' => 'store.store', 'enctype' => 'multipart/form-data']) }}
                            <div class="form-group">
                                <label>Khu vực</label>
                                <select class="form-control" name="id_region">
                                    @foreach($region as $rg)
                                    <option value="{{$rg->id}}">{{$rg->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                              <div class="form-group">
                                <label>Tên Cửa hàng</label>
                                <input class="form-control" name="name" placeholder=" Tên cửa hàng" required="required" />
                            </div>
                              <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" placeholder="Địa chỉ " required="required" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="phone_number" placeholder=" Số điện thoại" required="required" />
                            </div>
                            @if($errors->has('phone_number'))
                                <p style="color: red">{{ $errors->first('phone_number') }}</p>
                            @endif
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control"  type="file" name="image"/>
                            </div>
                            @if($errors->has('image'))
                                <p style="color: red">{{ $errors->first('image') }}</p>
                            @endif
                            {{ Form::submit('Thêm', ['class' => 'btn btn-success']) }}
                            {{ Form::reset('Làm mới', ['class' => 'btn btn-success']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
@endsection
