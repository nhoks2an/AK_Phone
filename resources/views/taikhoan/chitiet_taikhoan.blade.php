@extends('layout.layout')
@section('sidebar')
    @parent
<div class="btn-themmoi">
    <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
        <i class="far fa-save mr-2"></i>
        Khóa
    </button>
    <button class="btn btn-sm bg-gradient-success submit-check" type="submit">
        <i class="fas fa-redo mr-2""></i>
        Lưu tại trang
    </button>
    <button class="btn btn-sm bg-gradient-secondary" type="reset">
        <i class="fas fa-redo mr-2""></i>
        Làm lại
    </button>
    <a href="#" class="btn btn-sm bg-gradient-danger">
        <i class="fas fa-sign-out-alt mr-2"></i>
        Thoát
    </a>  
</div>

<div class="hinhanh col-xl-4">	
    <div class="card card-primary card-outline text-sm">
        <div class="card-header">
            <h3 class="card-title">Ảnh dại diện</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>
    <img class="rounded" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/250x250x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/assets/images/noimage.png" alt="Alt Photo">	</div>
 </div>   	
<div class="card card-primary card-outline text-sm ">
    <div class="card-header">
        <h3 class="card-title">Thông tin tài khoản</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi" role="tab" aria-controls="tabs-lang-vi" aria-selected="true">Tiếng Việt</a>
                    </li>
                </ul>
            </div>
            <div class="card-body card-article">
                <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                    <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel" aria-labelledby="tabs-lang">
                        <div class="form-group">
                            <label for="namevi">Họ và tên:</label>
                            <input type="text" class="form-control for-seo text-sm" name="data[hoten]" id="hoten" placeholder="Họ và tên" value="" required="">
                        </div>
                        <div class="form-group">
                            <label for="namevi">Địa chỉ:</label>
                            <input type="text" class="form-control for-seo text-sm" name="data[diachi]" id="diachi" placeholder="Địa chỉ" value="" required="">
                        </div>
                        <div class="form-group">
                            <label for="namevi">Phái:</label>
                            <input type="text" class="form-control for-seo text-sm" name="data[phai]" id="phai" placeholder="Phái" value="" required="">
                        </div>
                        <div class="form-group">
                            <label for="namevi">SĐT:</label>
                            <input type="number" class="form-control for-seo text-sm" name="data[sdti]" id="sdt" placeholder="Số điện thoại" value="" required="">
                        </div>
                        <div class="form-group">
                            <label for="namevi">Email:</label>
                            <input type="email" class="form-control for-seo text-sm" name="data[email]" id="email" placeholder="Email" value="" required="">
                        </div>
                        <div class="form-group">
                            <label for="namevi">Mật khẩu:</label>
                            <input type="password" class="form-control for-seo text-sm" name="data[matkhau]" id="matkhau" placeholder="Mật khẩu" value="" required="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
</div>
@section('Them')
@endsection
@endsection



