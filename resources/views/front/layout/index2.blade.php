@extends('front.layout.layout')
@section('content')
<div class="main-section">
            <div class="home-slider d-none d-md-block">
                <div class="container">
                    <div class="slider-wrapper">
                            <div class="slider-top">
                                <div class="slider-top-wrapper">
                                    <div class="slider-top-left">
                                        <div class=" owl-carousel owl-carousel-slider-top-left">
                                            <a href=""><img src="{{url('front/images/banner_images/home-slider-left-3.webp')}}" alt=""></a>
                                            <a href=""><img src="{{url('front/images/banner_images/home-slider-left-4.webp')}}" alt=""></a>
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
                                <a href=""><h2>Học viên tiêu biểu</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Trẻ em</a></li>
                                    <li><a href="">Người lớn</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items " >
                                                <div class="block-items-slider owl-carousel owl-carousel-learners">
                                                    <div class="item m-auto">
                                                        <div class="item-image">
                                                            <img  src="{{url('front/images/learner_images/learner5.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">NGUYỄN HỒNG QUÂN</h3>
                                                            <p class="item-description"><strong>Lớp:</strong> AD01</p>
                                                            <p class="item-description"><strong>Địa chỉ:</strong> Gia Lâm, Hà Nội</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                            <img  src="{{url('front/images/learner_images/learner4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details  mt-2">
                                                            <h3 class="item-name">CAO THÁI HÀ</h3>
                                                            <p class="item-description"><strong>Lớp:</strong> AD05</p>
                                                            <p class="item-description"><strong>Địa chỉ:</strong> Hai Bà Trưng,Hà Nội</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                            <img  src="{{url('front/images/learner_images/learner6.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">NGUYỄN HỒNG QUÂN</h3>
                                                            <p class="item-description"><strong>Lớp:</strong> AD01</p>
                                                            <p class="item-description"><strong>Địa chỉ:</strong> Gia Lâm, Hà Nội</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" >
                                                        <div class="item-image">
                                                            <img  src="{{url('front/images/learner_images/learner1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">NGUYỄN HỒNG QUÂN</h3>
                                                            <p class="item-description"><strong>Lớp:</strong> AD01</p>
                                                            <p class="item-description"><strong>Địa chỉ:</strong> Gia Lâm, Hà Nội</p>
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
                                <a href=""><h2>Khóa học hot</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Trẻ em</a></li>
                                    <li><a href="">Người lớn</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items" >
                                                <div class="block-items-slider  owl-carousel owl-carousel-courses">
                                                    <div class="item m-auto home-course">
                                                        <div class="item-image ">
                                                            <img  src="{{url('front/images/course_images/course4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">IELTS</h3>
                                                            <p class="item-description"><strong>Cơ quan cấp:</strong> British Council</p>
                                                            <p class="item-description"><strong>Số buổi:</strong> 30</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto home-course">
                                                        <div class="item-image">
                                                            <img src="{{url('front/images/course_images/course5.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details">
                                                            <h3 class="item-name">TOEIC</h3>
                                                            <p class="item-description"><strong>Cơ quan cấp:</strong> Bộ Giáo dục</p>
                                                            <p class="item-description"><strong>Số buổi:</strong> 25</p>
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
                                <a href=""><h2>Chứng chỉ</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Trẻ em</a></li>
                                    <li><a href="">Người lớn</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items" >
                                                <div class="block-items-slider  owl-carousel owl-carousel-certificates">
                                                    <div class="item m-auto home-course">
                                                        <div class="item-image ">
                                                            <img  src="{{url('front/images/certificate_images/certificate2.webp')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">IELTS</h3>
                                                            <p class="item-description"><strong>Cơ quan cấp:</strong> British Council</p>
                                                            <p class="item-description"><strong>Số buổi:</strong> 30</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto home-course">
                                                        <div class="item-image">
                                                            <img src="{{url('front/images/certificate_images/certificate1.webp')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">TOEIC</h3>
                                                            <p class="item-description"><strong>Cơ quan cấp:</strong> Bộ Giáo dục</p>
                                                            <p class="item-description"><strong>Số buổi:</strong> 25</p>
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
                                <a href=""><h2>Giáo viên bản xứ</h2></a>
                                <ul class="block-links d-none d-md-block">
                                    <li><a href="">Lớp trẻ em</a></li>
                                    <li><a href="">Lớp người lớn</a></li>
                                </ul>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items" >
                                                <div class="block-items-slider  owl-carousel owl-carousel-top-teachers">
                                                    <div class="item m-auto" style = "width: 237.5px; height: 300px;">
                                                        <div class="item-image">
                                                            <img style = "max-height: 180px; min-height:180px;" src="{{url('front/images/teacher_images/teacher1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="item-details mt-2">
                                                            <h3 class="item-name">Jenifer Donelly</h3>
                                                            <p class="item-description"><strong>Quốc tịch:</strong> Hoa Kỳ</p>
                                                            <p class="item-description"><strong>Bằng cấp:</strong> MBA</p>
                                                        </div>
                                                    </div>
                                                    <div class="item m-auto" style = "width: 237.5px; height: 300px;">
                                                        <div class="item-image">
                                                            <img style = "max-height: 180px;min-height:180px;" src="{{url('front/images/teacher_images/teacher2.png')}}" alt="">
                                                        </div>
                                                        <div class="item-details">
                                                            <h3 class="item-name">Jack McCarthy</h3>
                                                            <p class="item-description"><strong>Quốc tịch:</strong> Anh</p>
                                                            <p class="item-description"><strong>Bằng cấp:</strong> MBA</p>
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
                                <div class = "comment-header-title block-title-2">NHẬN XÉT CỦA PHỤ HUYNH VÀ HỌC VIÊN </div>
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
                                    <div class = "news-header-title block-title-2">TIN TỨC, EVENT, CẨM NANG HỌC TIẾNG ANH </div>
                                    <div class="underline"></div>
                            </div>
                        </div>
                        <div class="news-item-wrapper row mt-2">
                            <div class="news-item col-lg-6 col-xs-12">
                                <div class="news-item-image">
                                    <img style = "max-height: 360px; border-radius:6px;"src="{{asset('front/images/news_images/news-image1.jpg')}}" alt="">
                                </div>
                                <div class="news-item-title">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="news-item col-lg-6 col-xs-12">
                                <div class="news-item-image">
                                    <img style = "max-height: 360px; border-radius:6px;"src="{{asset('front/images/news_images/news-image1.jpg')}}" alt="">
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