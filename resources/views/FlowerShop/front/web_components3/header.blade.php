<header class="header-section">
    <div class="top-bar" style = "background-color: green;">
        <div class = "top-bar-slider">
            <a href=""><img src="{{url('front/images/topbar_images/topbar-banner1.webp')}}" alt=""></a>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo">
                    <a href="/"><img  style = "width: 70px; height: 60px"src="{{url('front/images-3/icon_images/bouquet-5.png')}}" alt=""></a>
                </div>
                <div class="header-search">
                    <div class="search-wrapper">
                        <form action="" class = "d-flex">
                            <input type="text" class = "form-control" placeholder = "Tìm kiếm ...">
                            <button type="submit" class="btn btn-warning" style = "background-color: #e62263; color: #fff; margin-left:6px;">Search</button>
                        </form>
                        
                    </div>
                </div>
                <div class="cart-container">
                    <div class="cart-wrapper">
                        <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        <div class="cart-count">1</div>
                    </div>
                    <span>Giỏ hàng</span>
                </div>
                <div class="header-action">
                    @if(Auth::check())
                    <div class="profile-image">
                        <img style = "width: 40px; height:40px;border-radius: 50%;" src="{{url('FlowerShop/front/images-3/profile_images/profile-image-1.jpg')}}" alt="">
                    </div>
                    <div class="logout" style = "margin-left: 6px;">
                        <button class="user-logout-btn" style = "font-size:24px;border:none;"><i class="fa-solid fa-power-off"></i></button>
                    </div>
                    @else
                    <div class="header-action-wrapper">
                        <a href = "/user/login-register"class="btn btn-outline-dark">Đăng ký</a>
                        <a href = "/user/login-register" class="btn btn-outline-dark">Đăng nhập</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="header-nav">
                <div class="nav-sidebar">
                    <div class="nav-sidebar-head">
                        <i class="fa-solid fa-bars"></i>
                        <span>DANH MỤC THÔNG TIN</span>
                    </div>
                    <div class="nav-sidebar-dropdown">
                        <ul class="nav-sidebar-list">
                            <li class="li-child">
                                <a href="/hoa-giam-gia">
                                <img src="{{url('front/images-3/icon_images/sale-tag.png')}}" alt="">
                                <span>Hoa giảm giá giá</span>
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
                                <a href="">
                                <img src="{{url('front/images-3/icon_images/wedding-dress.png')}}" alt="">
                                <span>Áo cưới cô dâu</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="">
                                <img src="{{url('front/images-3/icon_images/wedding-suit.png')}}" alt="">
                                <span>Bộ đồ chú rể</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="">
                                <img src="{{url('front/images-3/icon_images/photo-camera-interface-symbol-for-button.png')}}" alt="">
                                <span>Dịch vụ chụp ảnh, quay phim</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="li-child">
                                <a href="">
                                <img src="{{url('front/images-3/icon_images/car (1).png')}}" alt="">
                                <span>Cho thuê xe dịch vụ</span>
                                <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menu d-none d-sm-block">
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
                </div>
            </div>
        </div>
    </div>
</header>