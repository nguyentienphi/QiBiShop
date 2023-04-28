@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Sửa Sản Phẩm</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                        {{ Form::open(['method' => 'patch', 'route' => ['product.update', $product->id], 'enctype' => 'multipart/form-data']) }}
                            <div class="form-group">
                                <label>Tên cơ sở</label>
                                <select class="form-control" name="store" disabled="disabled">
                                        @foreach($product->stores as $stores)
                                            <option>{{ $stores->name }}</option>
                                        @endforeach()
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control" name="id_type" disabled="disabled">
                                    <option value="{{$product->typeProduct->id}}">{{ $product->typeProduct->name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản phẩm</label>
                                <input class="form-control" name="name"  placeholder="" required="" value="{{$product->name}}" />
                            </div>
                            @if($errors->has('name'))
                                <p style="color: red">{{ $errors->first('name') }}</p>
                            @endif
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control"  type="file" name="image"/>
                                <input type="hidden" name="image_old" value="{{$product->image}}">
                                @if($errors->has('image'))
                                    <p style="color: red">{{ $errors->first('image') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="price" placeholder=" "  required="" value="{{$product->price}}" />
                            </div>
                            @if($errors->has('price'))
                                <p style="color: red">{{ $errors->first('price') }}</p>
                            @endif
                              <div class="form-group">
                                <label>Đơn vị tính</label>
                                <select class="form-control" name="id_type" disabled="disabled">
                                    <option value="{{ $product->unit->id }}">{{ $product->unit->name }}</option>
                                </select>
                            </div>
                            {{ Form::submit('Cập nhật', ['class' => 'btn btn-success']) }}
                            {{ Form::reset('Làm mới', ['class' => 'btn btn-success']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
@endsection
