@extends('front.layout.layout3')
@section('content')
<div class="main-section">
            <div class="home-slider d-none d-md-block">
                <div class="container">
                    <div class="slider-wrapper">
                            <div class="slider-top">
                                <div class="slider-top-wrapper">
                                    <div class="slider-top-left">
                                        <div class=" owl-carousel owl-carousel-home-slider">
                                            <div class="home-slider-image-container">
                                            <a href=""><img src="{{url('front/images-3/banner_images/home-slider-1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="home-slider-image-container">
                                            <a href=""><img src="{{url('front/images-3/banner_images/home-slider-1.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-top-right">
                                        <div class="slider-top-right-wrapper">
                                            <ul>
                                                <li>
                                                    <a href=""><img src="{{url('front/images/banner_images/home-slider-left-1.webp')}}" alt=""></a>
                                                </li>
                                                <li>
                                                    <a href=""><img src="{{url('front/images/banner_images/slider-top-right-2.webp')}}" alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="slider-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner">
                <div class="container">
                    <div class="banner-wrapper">
                            <div class="banner-item">
                                <a href=""><img src="{{url('front/images/banner_images/home-banner-1.webp')}}" alt=""></a>
                            </div>
                            <div class="banner-item">
                                <a href=""><img src="{{url('front/images/banner_images/home-banner-2.webp')}}" alt=""></a>
                            </div>
                            <div class="banner-item">
                                <a href=""><img src="{{url('front/images/banner_images/home-banner-3.webp')}}" alt=""></a>
                            </div>
                            <div class="banner-item">
                                <a href=""><img src="{{url('front/images/banner_images/home-banner-4.webp')}}" alt=""></a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="main-data">
            <div class="item-block mt-2">
                    <div class="container">
                        <div class="block-wrapper">
                            <div class="block-title">
                                <a href=""><h2>Hoa mới về</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Size S</a></li>
                                    <li><a href="">Size M</a></li>
                                    <li><a href="">Size L</a></li>
                                    <li><a href="">Size XL</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items " >
                                                <div class="block-items-slider owl-carousel owl-carousel-new-flowers">
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                            <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA LY</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                            <img  src="{{url('front/images-3/new_images/new-flower-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details  mt-2">
                                                            <h3 class="item-name">HOA HỒNG THẮM</h3>
                                                            <p class="item-description"><strong>Mã:</strong> HO01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 700,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                            <img  src="{{url('front/images-3/new_images/new-flower-3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA HUỆ</h3>
                                                            <p class="item-description"><strong>Mã:</strong> HU01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/new_images/new-flower-4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA LAN</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-block mt-2">
                    <div class="container">
                        <div class="block-wrapper">
                            <div class="block-title">
                                <a href=""><h2>Hoa cưới hạnh phúc</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Size S</a></li>
                                    <li><a href="">Size M</a></li>
                                    <li><a href="">Size L</a></li>
                                    <li><a href="">Size XL</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items" >
                                                <div class="block-items-slider  owl-carousel owl-carousel-wedding-flowers">
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/wedding_images/wedding-flower-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA LAN</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/wedding_images/wedding-flower-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA LAN</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/wedding_images/wedding-flower-3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA LAN</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/wedding_images/wedding-flower-4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA LAN</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-block mt-2">
                    <div class="container">
                        <div class="block-wrapper">
                            <div class="block-title">
                                <a href=""><h2>TRÁP ĂN HỎI RỒNG PHƯỢNG</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Size S</a></li>
                                    <li><a href="">Size M</a></li>
                                    <li><a href="">Size L</a></li>
                                    <li><a href="">Size XL</a></li>
                                    <li><a href="">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items" >
                                                <div class="block-items-slider  owl-carousel owl-carousel-wedding-trays">
                                                    <div class="item m-auto">
                                                        <div class="item-image ">
                                                            <img  src="{{url('front/images-3/tray_images/tray-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">TRÁP 1</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/tray_images/tray-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">TRÁP 2</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/tray_images/tray-3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">TRÁP 3</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 800,000Đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-block mt-2">
                    <div class="container">
                        <div class="block-wrapper">
                            <div class="block-title">
                                <a href=""><h2>Hoa hội nghị</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Size S</a></li>
                                    <li><a href="">Size M</a></li>
                                    <li><a href="">Size L</a></li>
                                    <li><a href="">Size XL</a></li>
                                    <li><a href="">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items" >
                                                <div class="block-items-slider  owl-carousel owl-carousel-meeting-flowers">
                                                    <div class="item m-auto">
                                                        <div class="item-image ">
                                                            <img  src="{{url('front/images-3/meeting_images/meeting-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA HỘI NGHỊ 1</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/meeting_images/meeting-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA HỘI NGHỊ 2</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/meeting_images/meeting-3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">HOA HỘI NGHỊ 3</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 800,000Đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-block mt-2">
                    <div class="container">
                        <div class="block-wrapper">
                            <div class="block-title">
                                <a href=""><h2>Cho thuê xe cưới</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Mercedes</a></li>
                                    <li><a href="">Audi</a></li>
                                    <li><a href="">Roll Royce</a></li>
                                    <li><a href="">Toyota</a></li>
                                    <li><a href="">Xem tất cả</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items" >
                                                <div class="block-items-slider  owl-carousel owl-carousel-wedding-cars">
                                                    <div class="item m-auto">
                                                        <div class="item-image ">
                                                            <img  src="{{url('front/images-3/car_images/car-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">XE CƯỚI 1</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/car_images/car-2.png')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                        <h3 class="item-name">XE CƯỚI 2</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 600,000Đ</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                        <img  src="{{url('front/images-3/car_images/car-3.png')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                        <h3 class="item-name">XE CƯỚI 3</h3>
                                                            <p class="item-description"><strong>Mã:</strong> LA01</p>
                                                            <p class="item-description"><strong>Giá:</strong> 800,000Đ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-section mt-3">
                <div class="container">
                    <div class="comment-section-wrapper overflow-hidden">
                        <div class="row mt-2">
                            <div class="comment-header block-header-2 col-lg-12 d-flex">
                                <div class = "comment-header-title block-title-2">Nhận xét của khách hàng </div>
                                <div class="underline"></div>
                            </div>
                        </div>
                        <div class="comment-item-wrapper row mt-3 gy-3">
                            <div class="col-lg-12 comment-item">
                                <div class="comment-author-image my-1">
                                    <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
                                </div>
                                <div class="comment-author-name my-0 py-0">
                                    <span>NGUYỄN LỆ THỦY</span>
                                </div>
                                <div class="comment-author-address my-0  py-0">
                                    <p><strong>Địa chỉ:</strong> <i>215 Long Biên, Hà Nội</i></p>
                                </div>
                                <div class="comment-content mt-2">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                                </div> 
                            </div>
                            <div class="col-lg-12 comment-item">
                                <div class="comment-author-image my-1">
                                    <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
                                </div>
                                <div class="comment-author-name my-0 py-0">
                                    <span>NGUYỄN LỆ THỦY</span>
                                </div>
                                <div class="comment-author-address my-0  py-0">
                                    <p><strong>Địa chỉ:</strong> <i>215 Long Biên, Hà Nội</i></p>
                                </div>
                                <div class="comment-content mt-2">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                                </div> 
                            </div>
                            <div class="col-lg-12 comment-item">
                                <div class="comment-author-image my-1">
                                    <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
                                </div>
                                <div class="comment-author-name my-0 py-0">
                                    <span>NGUYỄN LỆ THỦY</span>
                                </div>
                                <div class="comment-author-address my-0  py-0">
                                    <p><strong>Địa chỉ:</strong> <i>215 Long Biên, Hà Nội</i></p>
                                </div>
                                <div class="comment-content mt-2">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                                </div> 
                            </div>
                            <a style = "text-decoration: underline; margin-left:10px;"href="">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-section mt-3">
                <div class="container overflow-hidden">
                    <div class="news-section-wrapper mt-2 ">
                        <div class="row ">
                            <div class="news-header col-lg-12 d-flex block-header-2">
                                    <div class = "news-header-title block-title-2">TIN TỨC, KINH NGHIỆM CHỌN HOA </div>
                                    <div class="underline"></div>
                            </div>
                        </div>
                        <div class="news-item-wrapper row mt-2">
                            <div class="news-item col-lg-6 col-xs-12">
                                <div class="news-item-image">
                                    <img style = "max-height: 360px; border-radius:6px;"src="{{asset('front/images-3/banner_images/home-slider-1.jpg')}}" alt="">
                                </div>
                                <div class="news-item-title">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="news-item col-lg-6 col-xs-12">
                                <div class="news-item-image">
                                <img style = "max-height: 360px; border-radius:6px;"src="{{asset('front/images-3/banner_images/home-slider-2.jpg')}}" alt="">
                                </div>
                                <div class="news-item-title">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection