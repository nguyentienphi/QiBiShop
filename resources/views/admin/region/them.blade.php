@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khu Vực
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                        {{ Form::open(['route' => 'region.store']) }}
                            
                            <div class="form-group">
                                <label>Tên Khu Vực</label>
                                <input class="form-control" name="name" placeholder="Nhập tên khu vực" />
                            </div>                           
                            {{ Form::submit('Thêm', ['class' => 'btn btn-success']) }}
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
