<!-- valid -->
<?php 
use App\Models\FlowerShop\Cart;
?>
<div class="header-section">
    <div class="header-section-first">
        <div><i class="fa-solid fa-phone-volume"></i><span>Hotline: 0988 666 888</span></div>
    </div>
    <div class="header-section-second">
        <div class="container" style = "background-color:inherit;">
            <div class="header-second-wrapper">
                <div class="header-second-left">
                    <div class="logo-wrapper">
                            <a href="/"><img src="{{url('FlowerShop/front/images-3/icon_images/logo-pts-5.png')}}" alt=""></a>
                        </div>
                </div>
                <div class="header-second-middle">
                    <div class="header-search">
                        <div class="search-wrapper">
                            <form action="{{url('/search')}}" class = "d-flex" method = "get">
                                <input type="text" class = "form-control" placeholder = "Tìm kiếm ..." id = "search" name = "search">
                                <button type="submit" style = "background-color: #e62263; color: #fff; margin-left:6px; border: 1px solid #e62263;width: 100px; border-radius: 4px;">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <ul class="header-list">
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/checkout"><img src="{{url('FlowerShop/front/images-3/icon_images/order-2.png')}}" alt="" width= "36" height = "36"><span>Đơn hàng</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/cart">
                                <div class="">
                                    <div class="header-cart-wrapper">
                                    <img src="{{url('FlowerShop/front/images-3/icon_images/cart-1.png')}}" alt="" width= "36" height = "36">
                                    <?php $cart_count = Cart::get_items();?>
                                    @if(count($cart_count) > 0)
                                    <div class="cart-count"> {{count($cart_count)}}</div>
                                    @endif
                                    </div>
                                    <span>Giỏ hàng</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            <a href="/contact"><img src="{{url('FlowerShop/front/images-3/icon_images/contact-1.png')}}" alt="" width= "36" height = "36"><span>Liên hệ</span></a>
                        </div>
                    </li>
                    <li>
                        <div class="header-item-wrapper">
                            @if(Auth::check())
                            <div class="profile-image">
                                <img style = "width: 40px; height:40px;border-radius: 50%;" src="{{url('FlowerShop/front/images-3/profile_images/profile-image-1.jpg')}}" alt="">
                            </div>
                            <div class="logout" style = "margin-left: 6px;">
                                <button class="user-logout-btn" style = "font-size:24px;border:none;"><i class="fa-solid fa-power-off"></i></button>
                            </div>
                            @else
                            <div class="header-account-wrapper">
                                <a href=""><img src="{{url('FlowerShop/front/images-3/icon_images/account-1.png')}}" width= "36" height = "36" alt=""><span>Tài khoản</span></a>
                                <div class="header-account-hover-wrapper">
                                    <a href="/user/login-register">Đăng nhập</a>
                                    <a href="/user/login-register">Đăng ký</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-nav">
                <div class="nav-sidebar">
                    <div class="nav-sidebar-head hide-on-mobile show-on-desktop">
                        <img src="{{url('FlowerShop/front/images-3/icon_images/menu-1.png')}}" width= "36" height = "36" alt="">
                        <span>DANH MỤC THÔNG TIN</span>
                    </div>
                    <div class="nav-sidebar-head-mobile show-on-mobile hide-on-desktop" onclick="openNav()">
                        <img src="{{url('FlowerShop/front/images-3/icon_images/menu-1.png')}}" width= "36" height = "36" alt="">
                        <span>MENU</span>
                    </div>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <ul class="nav-sidebar-list-mobile">
                            <li class="li-child">
                                <a href="/featured">
                                <span>Sản phẩm nổi bật</span>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/hoa-cuoi">
                                <span>Hoa cưới</span>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/hoa-hoi-nghi">
                                <span>Hoa hội nghị</span>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/trap-an-hoi">
                                <span>Trap ăn hỏi</span>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/coming-soon">
                                <span>Áo cưới cô dâu</span>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/coming-soon">
                                <span>Bộ đồ chú rể</span>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/coming-soon">
                                <span>Dịch vụ chụp ảnh, quay phim</span>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/trap-an-hoi">
                                <span>Cho thuê xe dịch vụ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-sidebar-dropdown dropdown hide-on-mobile">
                        <ul class="nav-sidebar-list">
                            <li class="li-child">
                                <a href="/featured">
                                <img src="{{url('front/images-3/icon_images/sale-tag.png')}}" alt="">
                                <span>Sản phẩm nổi bật</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/hoa-cuoi">
                                <img src="{{url('front/images-3/icon_images/flower-bouquet.png')}}" alt="">
                                <span>Hoa cưới</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/hoa-hoi-nghi">
                                <img src="{{url('front/images-3/icon_images/bouquet.png')}}" alt="">
                                <span>Hoa hội nghị</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/trap-an-hoi">
                                <img src="{{url('front/images-3/icon_images/balanced-diet.png')}}" alt="">
                                <span>Trap ăn hỏi</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/coming-soon">
                                <img src="{{url('front/images-3/icon_images/wedding-dress.png')}}" alt="">
                                <span>Áo cưới cô dâu</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/coming-soon">
                                <img src="{{url('front/images-3/icon_images/wedding-suit.png')}}" alt="">
                                <span>Bộ đồ chú rể</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/coming-soon">
                                <img src="{{url('front/images-3/icon_images/photo-camera-interface-symbol-for-button.png')}}" alt="">
                                <span>Dịch vụ chụp ảnh, quay phim</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="/trap-an-hoi">
                                <img src="{{url('front/images-3/icon_images/car (1).png')}}" alt="">
                                <span>Cho thuê xe dịch vụ</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="nav-menu d-none d-sm-block">
                    <ul class="nav-menu-list">
                        <li>
                            <a href="">
                            <i class="fa-solid fa-pen"></i>
                            <span>Tiêu đề 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                            <i class="fa-solid fa-pen"></i>
                            <span>Tiêu đề 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                            <i class="fa-solid fa-pen"></i>
                            <span>Tiêu đề 3</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                            <i class="fa-solid fa-pen"></i>
                            <span>Tiêu đề 4</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                            <i class="fa-solid fa-pen"></i>
                            <span>Tiêu đề 5</span>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>