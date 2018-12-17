@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Sản Phẩm
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                     @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th>ID Cha</th>

                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($type as $types)
                            <tr class="odd gradeX" align="center">
                                <td>{{$types->id}}</td>
                                <td>{{$types->name}}</td>
                                <td>{{$types->description}}</td>
                                <td>{{$types->id_parent}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('loai-san-pham.destroy', $types->id)}}" class="delete"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('loai-san-pham.edit', $types->id) }}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection