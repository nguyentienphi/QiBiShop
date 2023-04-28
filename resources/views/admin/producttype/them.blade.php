@extends('layouts.admin.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại sản phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                        {{ Form::open(['route' => 'loai-san-pham.store']) }}
                            <div class="form-group">
                                <label>Tên Loại Sản Phẩm </label>
                                <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm" required="required" />
                            </div>
                            @if($errors->has('name'))
                                <p style="color: red">{{ $errors->first('name') }}</p>
                            @endif
                            <div class="form-group">
                                <label> Mô tả </label>
                                <input class="form-control" name="description" placeholder="Mô tả" required="required" />
                            </div>
                            <div class="form-group">
                                <label> ID Cha </label>
                                <select name="id_parent" class="form-control" required="required">
                                    @foreach($type_parent as $type_parents)
                                        <option value="{{$type_parents->id}}"> {{ $type_parents->name }} </option>
                                    @endforeach()
                                </select>
                            </div>
                            {{ Form::submit('Thêm mới', ['class' => 'btn btn-success']) }}
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
