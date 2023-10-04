@extends('FlowerShop.front.layout.layout3')
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
                                <a href="/hoa-moi-ve"><h2>Sản phẩm hot</h2></a>
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
                                                @foreach($featured_products as $product)
                                                <div class="item m-auto">
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                <p class="item-description"><strong>Giá:</strong> {{$product['product_price']}}đ</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                <a href="/hoa-cuoi"><h2>Hoa cưới hạnh phúc</h2></a>
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
                                                    @foreach($wedding_flowers as $product)
                                                        <div class="item m-auto">
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                <p class="item-description"><strong>Giá:</strong> {{$product['product_price']}}đ</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                <a href="trap-an-hoi"><h2>TRÁP ĂN HỎI RỒNG PHƯỢNG</h2></a>
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
                                                    @foreach($wedding_trays as $product)
                                                        <div class="item m-auto">
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                <p class="item-description"><strong>Giá:</strong> {{$product['product_price']}}đ</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                <a href="/hoa-hoi-nghi"><h2>Hoa hội nghị</h2></a>
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
                                                    @foreach($meeting_flowers as $product)
                                                        <div class="item m-auto">
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                <p class="item-description"><strong>Giá:</strong> {{$product['product_price']}}đ</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                <a href="/xe-cuoi"><h2>Cho thuê xe cưới</h2></a>
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
                                                    @foreach($wedding_cars as $product)
                                                        <div class="item m-auto">
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                <p class="item-description"><strong>Giá:</strong> {{$product['product_price']}}đ</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
            <div class="home-comment-section mt-3">
                <div class="container">
                    <div class="home-comment-section-wrapper overflow-hidden">
                        <div class="row mt-2">
                            <div class="home-comment-header block-header-2 col-lg-12 d-flex">
                                <div class = "home-comment-header-title block-title-2">Nhận xét của khách hàng </div>
                                <div class="underline"></div>
                            </div>
                        </div>
                        <div class="home-comment-item-wrapper row mt-2 gy-2">
                            @foreach($homepage_ratings as $rating)
                            <div class="col-lg-6 col-md-6 col-xs-12 home-comment-item">
                                <div class="comment-author-image my-1">
                                    <img width = "50" height = "50" src="{{asset('front/images/comment_images/comment-author1.jpg')}}" alt="">
                                </div>
                                <div class="home-comment-author-name my-0 py-0">
                                    <span>{{$rating['name']}}</span>
                                    <span class="badge bg-success">Đã mua hàng tại FlowerShop</span>
                                </div>
                                <div class="home-comment-author-address my-0  py-0">
                                    <p><strong>Địa chỉ:</strong>&nbsp;{{$rating['address']}}, &nbsp;{{$rating['ward']}},&nbsp;{{$rating['district']}},&nbsp;{{$rating['province']}},</p>
                                </div>
                                <div class="home-comment-date my-0  py-0">
                                    <span>{{ \Carbon\Carbon::parse($rating['created_at'])->format('Y-m-d H:i'); }}</span>
                                </div>
                                <div class="home-comment-content mt-2">
                                    <p><i>"{{$rating['feedback']}}"</i></p>
                                </div> 
                            </div>
                            @endforeach
                            <a style = "text-decoration: underline; margin-left:10px;"href="/all-ratings">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-articles-section mt-3">
                <div class="container overflow-hidden">
                    <div class="home-articles-section-wrapper mt-2 ">
                        <div class="row ">
                            <div class="home-articles-header col-lg-12 d-flex block-header-2">
                                    <div class = "home-articles-header-title block-title-2">TIN TỨC, KINH NGHIỆM CHỌN HOA </div>
                                    <div class="underline"></div>
                            </div>
                        </div>
                        <div class="home-article-item-wrapper row mt-2">
                            @foreach($articles as $article)
                                <div class="home-article-item col-lg-6 col-xs-12">
                                    <a href="{{url('/article/'.$article['id'])}}">
                                    <div class="home-article-item-image">
                                        <img style = "max-height: 360px; border-radius:6px;"src="{{asset('front/images-3/banner_images/home-slider-1.jpg')}}" alt="">
                                    </div>
                                    <div class="home-article-item-title">
                                        <p>{{$article['name']}}</p>
                                    </div>
                                    </a>
                                </div>
                            @endforeach
                            <a style = "text-decoration: underline; margin-left:10px;"href="/all-articles">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection