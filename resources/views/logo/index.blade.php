@extends('layout.layout')
@section('sidebar')
    @parent

<section class="content">
    <form class="validation-form" novalidate="" method="post" id="form-watermark" action="index.php?com=photo&amp;act=save_static&amp;type=logo" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
        </div>

        
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Chi tiết Logo</h3>
            </div>
            <div class="card-body">
                                    <div class="form-group">
                        <div class="upload-file">
                            <p>Upload hình ảnh:</p>
                            <label class="upload-file-label mb-2" for="file">
                                <div class="upload-file-image rounded mb-3">
                                    <img class="rounded img-upload" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/132x108x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/thumbs/132x108x1/upload/photo/logo-2656.png" alt="Alt Photo">                                </div>
                                <div class="custom-file my-custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="file" lang="vi">
                                    <label class="custom-file-label mb-0" data-browse="Chọn" for="file">Chọn file</label>
                                </div>
                            </label>
                            <strong class="d-block text-sm">Width: 132 px - Height: 108 px (.jpg|.gif|.png|.jpeg|.gif)</strong>
                        </div>
                    </div>
                                                <div class="row">
                                                                            </div>
                <div class="form-group">
                                                                <div class="form-group d-inline-block mb-2 mr-2">
                            <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                            <div class="custom-control custom-checkbox d-inline-block align-middle">
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="status[hienthi]" id="hienthi-checkbox" checked="" value="hienthi">
                                <label for="hienthi-checkbox" class="custom-control-label"></label>
                            </div>
                        </div>
                                    </div>
                            </div>
        </div>
        <div class="card-footer text-sm">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
        </div>
    <input type="hidden" name="hash" value="sD5tOJdOqc"></form>
</section>
@section('Them')
@endsection
@endsection