@extends('layouts.admin.index')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Danh Sách User</small>
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
                                <th>User name</th>
                                <th>Mật khẩu</th>
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>Số cmnd</th>
                                <th>Số điện thoại</th>                                
                                <th>Địa chỉ</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $users)
                            <tr class="odd gradeX" align="center">
                                <td>{{$users->username}}</td>
                                <td>{{$users->password}}</td>
                                <td>{{$users->profile->name}}</td>
                                <td>{{$users->profile->birthday}}</td>
                                <td>{{$users->profile->nic_number}}</td>
                                <td>{{$users->profile->phone_number}}</td>
                                <td>{{$users->profile->address}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('user.destroy', $users->id)}}" class="delete"> Xóa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection