@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="login-register-section">
    <div class="login-register-hero-image" style = "background-image: url('{{url('FlowerShop/front/images-3/background_images/background-6.png')}}'); width: 100%; height: 300px;" >
    </div>
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="login-wrapper">
                    <h2>Đăng nhập</h2>
                    <h6>Mời bạn đăng nhập tài khoản người dùng.</h6>
                    <p id="login_error"></p>
                    <form action="javascript:void(0);" id = "login_form">@csrf
                        <div class="form-group">
                            <label for="login_email">Email</label>
                            <input type="email" class="form-control"  name = "email" id = "login_email" >
                            <p id="login_email_error"></p>
                        </div>
                        <div class="form-group mb-3">
                            <label for="login_password">Mật khẩu</label>
                            <input type="password" class="form-control" name = "password">
                            <p id="login_password_error"></p>
                        </div>
                        <div class="form-check mb-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="accept" id="login_accept" name = "accept">
                            <label class="form-check-label" for="login_accept">
                                I understand and accept the <a style = "text-decoration: underline;"href="">Terms and Conditions</a>.
                            </label>
                        </div>
                        <p id="login_accept_error"></p>
                        <button type="submit" class="btn btn-primary mr-2" style = "background-color: #e62263; border:none;">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="register-wrapper">
                    <h2>Đăng ký</h2>
                    <h6>Đăng ký tài khoản người dùng.</h6>
                    <div id = "register_success_message"></div>
                    <div id = "register_error_message"></div>
                    @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert">
                        <strong>Thành công:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
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
                        <div class="form-group ">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name = "password" >
                        </div>
                        <div class="form-check mb-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="accept" id="register_accept" name = "accept">
                            <label class="form-check-label" for="register_accept">
                                I understand and accept the <a style = "text-decoration: underline;"href="">Terms and Conditions</a>.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" style = "background-color: #e62263; border:none;">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection