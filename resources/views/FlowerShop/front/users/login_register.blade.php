@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="login-register-section">
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="login-wrapper">
                    <h2>Đăng nhập</h2>
                    <h6>Mời bạn đăng nhập tài khoản người dùng.</h6>
                    <form action="">@csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"  name = "email" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="register-wrapper">
                    <h2>Đăng ký</h2>
                    <h6>Đăng ký tài khoản người dùng.</h6>
                    <form action="" id = "register_form" method = "post">@csrf
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" name = "name" >
                        </div>
                        <div class="form-group">
                            <label for="mobile">Số điện thoại</label>
                            <input type="text" class="form-control" id="mobile" name = "mobile" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name = "email" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name = "password" >
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection