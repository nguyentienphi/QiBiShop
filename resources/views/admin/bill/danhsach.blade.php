@extends('layouts.admin.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <small>Danh Sách hóa đơn</small>
                    </h1>
                </div>
                @if(session()->has('thanhcong'))
                    <div class="alert alert-success">
                        {{ session('thanhcong') }}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>Khách hàng</th>
                            <th>Cửa hàng</th>
                            <th>Ngày</th>
                            <th>Tổng tiền</th>
                            <th>Kiểu thanh toán</th>   
                            <th>Thông tin</th>
                            <th>Xóa</th>                             
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bill as $bills)
                            <tr class="odd gradeX" align="center">
                                @foreach($user as $users)
                                    @if($users->id == $bills->customer->id_user)
                                        <td>{{$users->profile->name}}</td>
                                    @endif
                                @endforeach()

                                <td>
                                    @foreach($bills->products as $product)
                                        @foreach($product->stores as $stores)
                                            {{ $stores->name }}
                                        @endforeach()
                                        @break;
                                    @endforeach()
                                </td>
                                <td>{{$bills->date_bill}}</td>
                                <!-- <td>
                                    @foreach($bills->products as $quantity)
                                        {{ $quantity->pivot->price }}
                                    @endforeach()
                                </td> -->
                                <td>{{$bills->total}}</td>
                                @if(($bills->payment_type) == 1)
                                    <td>Thanh toán tại nhà</td>
                                @elseif($bills->payment_type == 2)
                                    <td>Online</td>
                                @endif
                                <td class="center">
                                    <a href="{{ route('bill.show',$bills->id) }}">Chi tiết</a>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('bill.destroy', $bills->id)}}" class="delete"> Xóa</a></td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection