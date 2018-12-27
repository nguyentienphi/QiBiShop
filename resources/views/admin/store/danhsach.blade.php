@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Cửa hàng
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                     @if(session('thanhcong'))
                        <div class =" alert alert-success">
                            {{session('thanhcong')}}
                        </div>
                        @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên cửa hàng</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Hình ảnh</th>
                                <th>Khu vực</th>                                
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($store as $st)
                            <tr class="odd gradeX" align="center">
                                <td>{{$st->id}}</td>
                                <td>{{$st->name}}</td>
                                
                                <td>{{$st->address}}</td>
                                <td>{{$st->phone_number}}</td>
                                <td><img width="100px" src="../storage/image/store/{{$st->image}}"></td>
                                <td>{{$st->region->name}}</td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('store.destroy', $st->id) }}" class="delete"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('store.edit', $st->id) }}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection