@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Khu Vực
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
                                <th>Tên</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($region as $regions)
                            <tr class="odd gradeX" align="center">
                                <td>{{$regions->id}}</td>
                                <td>{{$regions->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=" {{ route('region.destroy', $regions->id) }} " class="delete"> Xóa</a></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection