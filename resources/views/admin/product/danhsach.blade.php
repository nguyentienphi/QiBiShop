@extends('layouts.admin.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Sản phẩm
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
                                <th width="100px">Tên loại sản phẩm</th>
                                <th width="250px">Tên sản phẩm</th>
                                <th>Cửa hàng</th>
                                <th>Số lượng</th>
                                <th>Hình ảnh</th>
                                <th>Giá nhập</th>
                                <th>Giá bán</th>
                                <th>Đơn vị tính</th>                                                
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $products)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$products->typeProduct->name}}</td>
                                    <td>{{$products->name}}</td>
                                    <td>
                                        @foreach($products->stores as $store)
                                            {{ $store->name }}
                                        @endforeach()
                                    </td>
                                    <td>
                                       @foreach($products->stores as $soluong)
                                            {{ ($soluong->pivot->quantity ) }}
                                        @endforeach()
                                    </td>
                                    <td>
                                        <img src="../storage/image/product/{{$products->image}}" width="50px">
                                    </td>
                                    <td>
                                       @foreach($products->stores as $improt_price)
                                            {{ ($improt_price->pivot->import_price) }}
                                        @endforeach()
                                    </td>
                                    <td>{{ $products->price }}</td>
                                    <td>{{ $products->unit->name }}</td>
                                    <td class="center"><a href="{{ route('product.destroy', $products->id) }}" class="delete"><i class="fa fa-trash-o  fa-fw"></i> Xóa</a></td>
                                    <td class="center"> <a href="{{ route('product.edit', $products->id) }}"><i class="fa fa-pencil fa-fw"></i>Sửa</a>
                                    </td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection