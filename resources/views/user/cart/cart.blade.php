@extends('user.index')
@section('sidebar')
    @parent
<div class="bg-container">   
<div class="giohang center-layout">
    <div class="row mb" style="margin-top:20px">
        <div class="col-8">
        </div>
        <div class="col-4">
            <form class="login100-form validate-form" asp-controller="HoaDon" asp-action="CreateHD">
                <span class="login100-form-title p-b-48">
                    <i class="zmdi zmdi-font"></i>
                </span>
                <div class="wrap-input100 validate-input" data-validate="Vui lòng nhập số điện thoại">
                    <input class="input100" type="text" name="diachi" placeholder="Vui lòng nhập số điện thoại" required>
                    <input type="hidden" name="tongtien"  value="@sum" />
                </div>
                <div class="wrap-input100 validate-input" data-validate="Vui lòng nhập địa chỉ">
                    <input class="input100" type="text" name="diachi" placeholder="Nhập địa chỉ nhận hàng" required>
                    <input type="hidden" name="tongtien"  value="@sum" />      
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Đặt hàng
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('Them')
@endsection   