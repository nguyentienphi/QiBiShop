<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Loại Sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('loai-san-pham.index') }}">Danh Sách Loại Sản Phẩm</a>
                                </li>
                                <li>
                                    <a href="{{ route('loai-san-pham.create') }}">Thêm Loại Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('product.index') }}">Danh Sách Sản Phẩm</a>
                                </li>
                                <li>
                                    <a href="{{ route('product.create') }}">Thêm Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Hóa Đơn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('bill') }}">Danh Sách Hóa Đơn Xuất </a>
                                </li>
                                <li>
                                    <a href="admin/purchase/danhsach">Danh Sách Hóa Đơn Nhập</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Khu Vực<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('region') }}">Danh Sách Khu Vực </a>
                                </li>
                                <li>
                                    <a href="{{ route('region.create') }}">Thêm Khu Vực</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Cửa Hàng <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('store.index') }}">Danh Sách Cửa Hàng </a>
                                </li>
                                <li>
                                    <a href="{{ route('store.create') }}">Thêm Cửa Hàng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Đối Tác<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/supplier/danhsach">Danh Sách Đối Tác </a>
                                </li>
                                <li>
                                    <a href="admin/supplier/them">Thêm Đối Tác</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Nhóm Đối Tác<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/suppliergroup/danhsach">Danh Sách Nhóm Đối Tác </a>
                                </li>
                                <li>
                                    <a href="admin/suppliergroup/them">Thêm Nhóm Đối Tác</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Người Dùng <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('user') }}">Danh Sách Người Dùng </a>
                                </li>
                               <!--  <li>
                                    <a href="admin/producttype/them">Thêm Người Dùng</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Kho<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/suppliergroup/danhsach">Danh Sách Kho </a>
                                </li>
                                <li>
                                    <a href="admin/suppliergroup/them">Thêm Kho</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->