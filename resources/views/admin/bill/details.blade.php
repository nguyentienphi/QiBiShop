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
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>                      
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bill->products as $product)
                            <tr>
                                <td>{{ ($product->name) }}</td>
                                <td> {{ $product->pivot->quantity }} </td>
                                <td>{{ $product->pivot->price }}</td>
                            </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection