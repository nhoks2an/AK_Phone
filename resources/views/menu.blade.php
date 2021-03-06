

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AK Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{route('taikhoan')}}">
            <i class="fas fa-user-cog"></i>
            <span>Quản lý tài khoản</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- quan li san pham -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fas fa-boxes"></i>
            <span>Quản lý sản phẩm</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('loai')}}"> <i class="far fa-caret-square-right"></i> Danh mục cấp 1 (loại)</a>
                <a class="collapse-item" href="{{route('sanpham')}}"> <i class="far fa-caret-square-right"></i> Sản phẩm</a>
                <a class="collapse-item" href="{{route('mau')}}"> <i class="far fa-caret-square-right"></i> Màu sắc<!--  --></a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
        <!-- quan lý hang -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('hang')}}">
        <i class="fas fa-trademark"></i>
            <span>Quản lý hãng</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
            <!-- hóa đơn -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Quản lý hóa đơn</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item" href="{{route('hoadon')}}"> <i class="far fa-caret-square-right"></i> Hóa đơn</a>
             <a class="collapse-item" href="{{route('cthoadon')}}"> <i class="far fa-caret-square-right"></i> Chi tiết hóa đơn</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
        <!-- tĩnh -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fas fa-bookmark"></i>
            <span>Quản lý trang tĩnh</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('sologan')}}"> <i class="far fa-caret-square-right"></i> Slogan</a>
                <a class="collapse-item" href="{{route('gioithieu')}}"> <i class="far fa-caret-square-right"></i> Giới thiệu</a>
                <a class="collapse-item" href="{{route('banner')}}"> <i class="far fa-caret-square-right"></i> Banner</a>
                <a class="collapse-item" href="{{route('footerr')}}"> <i class="far fa-caret-square-right"></i> Footer</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
        <!-- tĩnh -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
            <i class="fas fas fa-photo-video"></i>
            <span>Quản lý Video- Hình ảnh</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('logo')}}"> <i class="far fa-caret-square-right"></i> Logo</a>
                <a class="collapse-item" href="{{route('slideshow')}}"> <i class="far fa-caret-square-right"></i> SlideShow</a>
             
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('binhluan')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quản lý bình luận</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Tables -->
   
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="view/dangnhap/index.php">Logout</a>
            </div>
        </div>
    </div>
</div>