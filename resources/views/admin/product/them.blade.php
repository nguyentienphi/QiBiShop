@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                        {{ Form::open(['route' => 'product.store', 'enctype' => 'multipart/form-data']) }}
                            <div class="form-group">
                                <label>Tên cơ sở</label>
                                <select class="form-control" name="store">
                                    @foreach($store as $stores)
                                        <option value="{{$stores->id}}">{{ $stores->name }}</option>
                                    @endforeach()
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control" name="id_type">
                                    @foreach($type_product as $type_products)
                                        <option value="{{$type_products->id}}">{{ $type_products->name }}</option>
                                    @endforeach()
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản phẩm</label>
                                <input class="form-control" name="name"  placeholder="" required="" />
                            </div>
                            @if($errors->has('name'))
                                <p style="color: red">{{ $errors->first('name') }}</p>
                            @endif
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control"  type="file" name="image" required="required" />
                                @if($errors->has('image'))
                                    <p style="color: red">{{ $errors->first('image') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="price" placeholder=" "  required="" />
                            </div>
                            @if($errors->has('price'))
                                <p style="color: red">{{ $errors->first('price') }}</p>
                            @endif
                              <div class="form-group">
                                <label>Đơn vị tính</label>
                                <select class="form-control" name="id_unit">
                                    @foreach($unit as $units)
                                        <option value="{{$units->id}}">{{ $units->name }}</option>
                                    @endforeach()
                                </select>
                            </div>
                            {{ Form::submit('Thêm', ['class' => 'btn btn-success']) }}
                            {{ Form::reset('Làm mới', ['class' => 'btn btn-success']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
@endsection
