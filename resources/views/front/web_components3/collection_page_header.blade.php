

<header class="insHeaderPage">
    <div class="headerPage">
        <div class="container">
            <div class="header-page__wrapper">
                <div class="header-logo">
                    <a href="index.php"><img src="img/logo-hacom.png" alt=""></a>
                </div>
                <div class="header-search">
                    <div class="frmSearch">
                        <form action="/search" id = "searchFRM">
                            <input type="hidden" name = "type" value = "product">
                            <input type="text" required autocomplete="off" id = "inputSearchAuto" placeholder = "Search">
                            <button type = "submit" class = "insButton btnSearch">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                Tìm kiếm
                            </button>
                        </form>
                        <div class="ajaxSearchAuto" style = "display: none"></div>
                    </div>
                </div>
                <div class="header-action">
                    <div class="item header-action__acount hidden-sm hidden-xs">
                        <div class="icon">
                            <a href="">
                                <i class="fa fa-user"></i>
                            </a>
                        </div>
                        <div class="text">
                            <span>Đăng nhập/Đăng ký</span>
                            <br>
                            <span>
                                <b>Tài khoản</b>
                                <i class="fa fa-caret-down"></i>
                            </span>
                        </div>
                        <div class="header-account__dropdown">
                            <ul class="list">
                                <li>
                                    <a href="#" onclick="return false;" class="btn btn-login">Đăng nhập</a>
                                </li>
                                <li>
                                    <a href="#" onclick="return false;" class="btn btn-login">Tạo tài khoản</a>
                                </li>
                                <li>
                                    <a href="#" onclick="return false;" class="btn btn-social">
                                        <i class="fa-brands fa-facebook"></i>
                                        <strong>Đăng nhập bằng Facebook</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="return false;" class="btn btn-social gg">
                                        <i class="fa-brands fa-google"></i>
                                        <strong>Đăng nhập bằng Google</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="item header-action__cart">
                        <div class="icon">
                            <a href="">
                                <i class="fa-solid fa-cart-arrow-down"></i>
                                <span class="cart-count">1</span>
                            </a>
                        </div>
                        <div class="text">
                            <span><b>Giỏ hàng</b></span>
                        </div>
                    </div>
                    <div class="item header-action_-toggle hidden-md hidden-lg">
                    </div>
                </div> 
            </div>
            <div class = "header-page__nav hidden-sm hidden-xs">
                <div class="nav-sidebar nav-sidebar__collection">
                    <div class="nav-sidebar__head">
                        <i class="fa fa-bars">
                        </i>
                        <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="nav-sidebar__dropdown dropdown__collection">
                        <ul class="nav-sidebar__list list 2">
                            <li class = "li_child">
                                <a href="collection_page.php?collection=laptop_chinh_hang">
                                    <img src="img/hinhanhmenumenu1.webp" alt="">
                                    <span>Linh Kiện Mới</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu2.webp" alt="">
                                    <span>Linh Kiện Cũ</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4">
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="collection_page.php?collection=laptop_chinh_hang">
                                    <img src="img/hinhanhmenumenu3.webp" alt="">
                                    <span>Laptop chính hãng</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="collection_page.php?collection=pc_gaming">
                                    <img src="img/hinhanhmenumenu4.webp" alt="">
                                    <span>PC Gaming, Đồ họa, Audio</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="collection_page.php?collection=pc_office">
                                    <img src="img/hinhanhmenumenu5.webp" alt="">
                                    <span>PC Văn phòng, Mini PC</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="collection_page.php?collection=monitors">
                                    <img src="img/hinhanhmenumenu6.webp" alt="">
                                    <span>Màn Hình Máy Tính</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu7.webp" alt="">
                                    <span>Phụ kiện</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu8.webp" alt="">
                                    <span>Bàn Ghế Gaming</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu9.webp" alt="">
                                    <span>Phím, Chuột, Tai nghe</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu10.webp" alt="">
                                    <span>Thiết Bị Mạng</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu11.webp" alt="">
                                    <span>Thiết Bị Âm Thanh</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu12.webp" alt="">
                                    <span>Phần Mềm</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu13.webp" alt="">
                                    <span>Camera, Thiết Bị Quan Sát</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu14.webp" alt="">
                                    <span>Thiết Bị Văn Phòng</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class = "li_child">
                                <a href="">
                                    <img src="img/hinhanhmenumenu15.webp" alt="">
                                    <span>Tản Nhiệt PC</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <div class="mainChild lv2">
                                    <div class = "main-child__content">
                                        <div class="main-child__wrapper">
                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="main-child__item">
                                                <a href="" class="head">
                                                    <span>CPU - Bộ vi xử lý</span>
                                                    <i class="fa fa-angle-down hidden-md hidden-lg"></i>
                                                </a>
                                                <ul class="levlup_3">
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 13 (mới)</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime">
                                                        <a href="">
                                                            <span class="vivaa">Intel thế hệ 12</span>
                                                        </a>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li class="relativetime arrowline">
                                                        <a href="">
                                                            <span class="vivaa">CPU Tray - No box</span>
                                                        </a>
                                                        <ul class="levlup_4"  >
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i3</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i5</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="">
                                                                    <span>Intel Core i7</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="main-child__banner">

                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-main__menu navSiteMain">
                    <ul class="nav-navbar">
                        <li>
                            <a href="">
                                <img src="img/icon_nav_1.webp" alt="" class="navIcon">
                                <span>Lắp đặt phòng net</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icon_nav_2.webp" alt="" class="navIcon">
                                <span>Trả góp</span>
                            </a>
                        </li>
                        <li class = "li_child">
                            <a href="">
                                <img src="img/icon_nav_3.webp" alt="" class="navIcon">
                                <span>Bảng giá</span>
                                <ul class="mainChild levlup_2">
                                    <li>
                                        <a href=""aria-label = "Bảng giá mua cũ"></a>
                                    </li>
                                    <li>
                                        <a href=""aria-label = "Bảng giá bán"></a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icon_nav_4.webp" alt="" class="navIcon">
                                <span>Xây dựng cấu hình</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icon_nav_5.webp" alt="" class="navIcon">
                                <span>Kiểm tra bảo hành</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="img/icon_nav_6.webp" alt="" class="navIcon">
                                <span>Thiết bị mạng</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
