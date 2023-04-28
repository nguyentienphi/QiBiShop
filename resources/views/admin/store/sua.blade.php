@extends('layouts.admin.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cửa hàng
                            <small>{{$store->name}}</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                        {{ Form::open(['method' => 'patch', 'route' => ['store.update', $store->id], 'enctype' => 'multipart/form-data']) }}
                            <div class="form-group">
                                <label>Khu vực</label>
                                <select class="form-control" name="khuvuc" disabled="disabled">
                                    <option value="{{$store->region->id}}">{{$store->region->name}}</option>
                                </select>
                            </div>
                              <div class="form-group">
                                <label>Tên Cửa hàng</label>
                                <input class="form-control" name="name" value="{{$store->name}}" placeholder=""  required="required" />
                            </div>
                              <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" placeholder=" " value="{{$store->address}}" />
                            </div>
                              <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="phone_number" placeholder="" value="{{$store->phone_number}}" required="required" />
                            </div>
                            @if($errors->has('phone_number'))
                                <p style="color: red">{{ $errors->first('phone_number') }}</p>
                            @endif
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control"  type="file" name="image"/>
                                <input type="hidden" name="old_image" value="{{$store->image}}">
                            </div>
                            @if($errors->has('image'))
                                <p style="color: red">{{ $errors->first('image') }}</p>
                            @endif
                            {{ Form::submit('Cập nhật', ['class' => 'btn btn-success']) }}
                            {{ Form::reset('Làm mới', ['class' => 'btn btn-success']) }}
                        {{ Form::close() }}
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
