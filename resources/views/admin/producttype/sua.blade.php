@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa danh mục </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                        @endif
                        @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                        @foreach($type as $types)
                            {{ Form::open(['method' => 'patch', 'route' => ['loai-san-pham.update', $types->id]]) }}
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" name="name" placeholder="Điền tên nhóm sản phẩm" value="{{$types->name}}"/>
                            </div>
                             @if($errors->has('name'))
                                <p style="color: red">{{ $errors->first('name') }}</p>
                            @endif
                            <div class="form-group">
                                <label> Mô tả </label>
                                <input class="form-control" name="description" placeholder="Mô tả" value="{{$types->description}} "/>
                            </div>
                            <div class="form-group">
                                <label> ID Cha </label>
                                <input class="form-control" name="id_parent" placeholder="id cha" value="{{$types->id_parent}} "/>
                            </div>
                           {{ Form::submit('Cập nhật', ['class' => 'btn btn-success']) }}
                           {{ Form::reset('Làm mới', ['class' => 'btn btn-success']) }}
                        {{ Form::close() }}
                        @endforeach()
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection