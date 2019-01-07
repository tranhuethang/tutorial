<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <?php $user = Auth::user(); ?>
            @if($user->level == 1 && $user->status == 1)
                    <li class="active">
                        <a href="http://localhost/crm/admin/homepage"><i class="fa fa-tachometer"></i><span>Trang Chủ</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user-circle"></i><span>Quản Lý Nhân Viên</span>
                            <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/crm/user/employeemanage">Quản Lý Thông Tin Nhân Viên</a></li>
                            <li><a href="http://localhost/crm/user/addemployee">Thêm Nhân Viên Mới</a></li>
                        </ul>
                    </li>
                @else
                    <li class="active">
                        <a href="http://localhost/crm/employee/homepage"><i class="fa fa-tachometer"></i><span>Trang Chủ</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i><span>Quản Lý Khách Hàng</span>
                            <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/crm/customer/add">Thêm Khách Hàng</a></li>
                            <li><a href="http://localhost/crm/customer/list">Danh Sách Khách Hàng</a></li>
                            {{--<li><a href="http://localhost/crm/customer/group">Nhóm Khách Hàng</a></li>--}}
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-basket"></i><span>Quản Lý Giao Dịch</span>
                            <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/crm/promotion/transactionm">Quản Lý Giao Dịch</a></li>
                            <li><a href="http://localhost/crm/promotion/addtr">Thêm Mới</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i><span>Đổi Trả Sản Phẩm</span>
                            <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/crm/change/changeinformation">Thông Tin Đổi Trả Sản Phẩm</a></li>
                            <li><a href="http://localhost/crm/change/addch">Thêm Mới</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-text"></i><span>Theo Dõi Bảo Hành</span>
                            <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="http://localhost/crm/warranty/warrantymanage">Quản Lý Thông Tin Bảo Hành</a></li>
                            <li><a href="http://localhost/crm/warranty/addwarranty">Thêm Thông Tin Bảo Hành</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://localhost/crm/advisory">
                            <i class="fa fa-envelope-o"></i> <span>Tư Vấn Khách Hàng</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>
                @endif
           {{-- <li class="active">
                <a href="http://localhost/crm/homepage"><i class="fa fa-tachometer"></i><span>Trang Chủ</span>
                    <span class="pull-right-container">
                     </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i><span>Quản Lý Khách Hàng</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/crm/customer/add">Thêm Khách Hàng</a></li>
                    <li><a href="http://localhost/crm/customer/list">Danh Sách Khách Hàng</a></li>
                    <li><a href="http://localhost/crm/customer/group">Nhóm Khách Hàng</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-basket"></i><span>Chương Trình Khuyến Mãi</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/crm/promotion/transactionm">Quản Lý Giao Dịch</a></li>
                    <li><a href="http://localhost/crm/promotion/addtr">Thêm Mới</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i><span>Đổi Trả Sản Phẩm</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/crm/change/changeinformation">Thông Tin Đổi Trả Sản Phẩm</a></li>
                    <li><a href="http://localhost/crm/change/addch">Thêm Mới</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-circle"></i><span>Quản Lý Nhân Viên</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/crm/user/employeemanage">Quản Lý Thông Tin Nhân Viên</a></li>
                    <li><a href="http://localhost/crm/user/addemployee">Thêm Nhân Viên Mới</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text"></i><span>Theo Dõi Bảo Hành</span>
                    <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/crm/warranty/warrantymanage">Quản Lý Thông Tin Bảo Hành</a></li>
                    <li><a href="http://localhost/crm/warranty/addwarranty">Thêm Thông Tin Bảo Hành</a></li>
                </ul>
            </li>
            <li>
                <a href="http://localhost/crm/advisory">
                    <i class="fa fa-envelope-o"></i> <span>Tư Vấn Khách Hàng</span>
                    <span class="pull-right-container">
                     </span>
                </a>
            </li>--}}
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>