<?php 
use App\Models\FlowerShop\Product; 
use App\Models\FlowerShop\ProductFilter;
use App\Models\FlowerShop\Brand;

?>
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
                                            <a href="/hoa-cuoi"><img src="{{url('front/images-3/banner_images/home-slider-1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="home-slider-image-container">
                                            <a href="/hoa-hoi-nghi"><img src="{{url('front/images-3/banner_images/home-slider-2.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-top-right">
                                        <div class="slider-top-right-wrapper">
                                            <ul>
                                                <li>
                                                    <a href="/hoa-cuoi"><img src="{{url('FlowerShop/front/images-3/banner_images/banner-trapanhoi-2.png')}}" alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="/hoa-hoi-nghi"><img src="{{url('FlowerShop/front/images-3/banner_images/car-banner.png')}}" alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner hide-on-mobile">
                <div class="container">
                    <div class="banner-wrapper">
                            <div class="banner-item">
                                <a href="/hoa-cuoi"><img src="{{url('FlowerShop/front/images-3/banner_images/lower-banner-2.png')}}"width = "360" height = "165" style = "border-radius: 4px;" alt=""></a>
                            </div>
                            <div class="banner-item">
                                <a href="/hoa-hoi-nghi"><img src="{{url('FlowerShop/front/images-3/banner_images/banner-4.png')}}" alt=""></a>
                            </div>
                            <div class="banner-item">
                                <a href="/hoa-cuoi"><img src="{{url('FlowerShop/front/images-3/banner_images/lower-banner-2.png')}}" alt=""></a>
                            </div>
                            <div class="banner-item">
                                <a href="/hoa-hoi-nghi"><img src="{{url('FlowerShop/front/images-3/banner_images/banner-4.png')}}" alt=""></a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="main-data">
            <div class="item-block mt-2">
                    <div class="container">
                        <div class="block-wrapper">
                            <div class="block-title">
                                <a href="/featured"><h2>Sản phẩm hot</h2></a>
                            </div>
                            <div class="block-content">
                                <div class="row">
                                    <div class="block-column col-md-12 col-xs-12">
                                        <div class="block-content-wrapper">
                                            <div class="block-items " >
                                                <div class="block-items-slider owl-carousel owl-carousel-new-flowers">
                                                @foreach($featured_products as $product)
                                                <div class="item m-auto">
                                                            <div class="home-product-discount">
                                                                @if($product['product_discount']>0)
                                                                <span class="product-feature-discount">-{{$product['product_discount']}}%</span>
                                                                @endif
                                                            </div>
                                                            <div class="product-features">
                                                                <?php $is_new = Product::is_new($product['id'])?>
                                                                @if($is_new = "yes")
                                                                <span class="product-feature-new">New</span>
                                                                @endif
                                                                @if(!empty($product['gifts']))
                                                                <span class="product-feature-gift">Quà tặng</span>
                                                                @endif
                                                                @if($product['is_featured']=="Yes")
                                                                <span class="product-feature-hot">Trending</span>
                                                                @endif
                                                            </div>
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <div class="">
                                                                    <?php 
                                                                        $rating_info = Product::get_rating($product['id']);
                                                                        $is_rated = $rating_info['is_rated'];
                                                                        if($is_rated=="no"){
                                                                            $count = 5;
                                                                            while($count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $count--;
                                                                            }
                                                                        }else{
                                                                            $count = 0;
                                                                            $total_count = 5- $rating_info['product_rating'];
                                                                            while($count< $rating_info['product_rating']) {
                                                                                echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                                                                $count++;
                                                                            }
                                                                            while($total_count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $total_count--;
                                                                            }
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                @if($product['product_discount']==0)
                                                                    <span ><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($product['product_price'])?>đ</span></span>
                                                                    @else
                                                                    <?php $discounted_price = Product::discounted_price($product['id'])?>
                                                                    <span class="item-price"><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($discounted_price['discounted_price'])?></span>đ</span>
                                                                    <span class = "home-item-old-price"><?php echo number_format($product['product_price'])?>đ<span>
                                                                @endif
                                                            </div>
                                                            <div class="home-item-action">
                                                                <a href="{{url('/product/'.$product['id'])}}">Xem chi tiết</a>
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
                                <ul class="block-links">
                                    <?php $sizes = ProductFilter::sizes('hoa-cuoi'); ?>
                                    @foreach($sizes as $size)
                                    <li><a href="{{url('/home/hoa-cuoi/'.$size)}}" data-section = "hoa-cuoi">Size {{$size}}</a></li>
                                    @endforeach
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
                                                            <div class="home-product-discount">
                                                                @if($product['product_discount']>0)
                                                                <span class="product-feature-discount">-{{$product['product_discount']}}%</span>
                                                                @endif
                                                            </div>
                                                            <div class="product-features">
                                                                <?php $is_new = Product::is_new($product['id'])?>
                                                                @if($is_new = "yes")
                                                                <span class="product-feature-new">New</span>
                                                                @endif
                                                                @if(!empty($product['gifts']))
                                                                <span class="product-feature-gift">Quà tặng</span>
                                                                @endif
                                                                @if($product['is_featured']=="Yes")
                                                                <span class="product-feature-hot">Trending</span>
                                                                @endif
                                                            </div>
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <div class="">
                                                                <?php 
                                                                    $rating_info = Product::get_rating($product['id']);
                                                                    $is_rated = $rating_info['is_rated'];
                                                                    if($is_rated=="no"){
                                                                        $count = 5;
                                                                        while($count>0) {
                                                                            echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                            $count--;
                                                                        }
                                                                    }else{
                                                                        $count = 0;
                                                                        $total_count = 5- $rating_info['product_rating'];
                                                                        while($count< $rating_info['product_rating']) {
                                                                            echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                                                            $count++;
                                                                        }
                                                                        while($total_count>0) {
                                                                            echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                            $total_count--;
                                                                        }
                                                                    }
                                                                ?>
                                                                </div>
                                                                <p class="item-desc"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                @if($product['product_discount']==0)
                                                                    <span ><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($product['product_price'])?>đ</span></span>
                                                                    @else
                                                                    <?php $discounted_price = Product::discounted_price($product['id'])?>
                                                                    <span class="item-price"><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($discounted_price['discounted_price'])?></span>đ</span>
                                                                    <span class = "home-item-old-price"><?php echo number_format($product['product_price'])?>đ<span>
                                                                @endif
                                                            </div>
                                                            <div class="home-item-action">
                                                                <a href="{{url('/product/'.$product['id'])}}">Xem chi tiết</a>
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
                                <ul class="block-links">
                                    <?php $sizes = ProductFilter::sizes('trap-an-hoi'); ?>
                                    @foreach($sizes as $size)
                                    <li><a href="">Size {{$size}}</a></li>
                                    @endforeach
                                    <li><a href="/trap-an-hoi">Xem tất cả</a></li>
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
                                                        <div class="home-product-discount">
                                                                @if($product['product_discount']>0)
                                                                <span class="product-feature-discount">-{{$product['product_discount']}}%</span>
                                                                @endif
                                                            </div>
                                                            <div class="product-features">
                                                                <?php $is_new = Product::is_new($product['id'])?>
                                                                @if($is_new = "yes")
                                                                <span class="product-feature-new">New</span>
                                                                @endif
                                                                @if(!empty($product['gifts']))
                                                                <span class="product-feature-gift">Quà tặng</span>
                                                                @endif
                                                                @if($product['is_featured']=="Yes")
                                                                <span class="product-feature-hot">Trending</span>
                                                                @endif
                                                            </div>
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <div class="">
                                                                    <?php 
                                                                        $rating_info = Product::get_rating($product['id']);
                                                                        $is_rated = $rating_info['is_rated'];
                                                                        if($is_rated=="no"){
                                                                            $count = 5;
                                                                            while($count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $count--;
                                                                            }
                                                                        }else{
                                                                            $count = 0;
                                                                            $total_count = 5- $rating_info['product_rating'];
                                                                            while($count< $rating_info['product_rating']) {
                                                                                echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                                                                $count++;
                                                                            }
                                                                            while($total_count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $total_count--;
                                                                            }
                                                                        }
                                                                    ?>
                                                                    </div>
                                                                    <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                    @if($product['product_discount']==0)
                                                                        <span ><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($product['product_price'])?>đ</span></span>
                                                                        @else
                                                                        <?php $discounted_price = Product::discounted_price($product['id'])?>
                                                                        <span class="item-price"><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($discounted_price['discounted_price'])?></span>đ</span>
                                                                        <span class = "home-item-old-price"><?php echo number_format($product['product_price'])?>đ<span>
                                                                    @endif
                                                                </div>
                                                                <div class="home-item-action">
                                                                <a href="{{url('/product/'.$product['id'])}}">Xem chi tiết</a>
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
                                <ul class="block-links">
                                    <?php $sizes = ProductFilter::sizes('hoa-hoi-nghi'); ?>
                                    @foreach($sizes as $size)
                                    <li><a href="">Size {{$size}}</a></li>
                                    @endforeach
                                    <li><a href="/hoa-hoi-nghi">Xem tất cả</a></li>
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
                                                        <div class="home-product-discount">
                                                                @if($product['product_discount']>0)
                                                                <span class="product-feature-discount">-{{$product['product_discount']}}%</span>
                                                                @endif
                                                            </div>
                                                            <div class="product-features">
                                                                <?php $is_new = Product::is_new($product['id'])?>
                                                                @if($is_new = "yes")
                                                                <span class="product-feature-new">New</span>
                                                                @endif
                                                                @if(!empty($product['gifts']))
                                                                <span class="product-feature-gift">Quà tặng</span>
                                                                @endif
                                                                @if($product['is_featured']=="Yes")
                                                                <span class="product-feature-hot">Trending</span>
                                                                @endif
                                                            </div>
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <div class="">
                                                                    <?php 
                                                                        $rating_info = Product::get_rating($product['id']);
                                                                        $is_rated = $rating_info['is_rated'];
                                                                        if($is_rated=="no"){
                                                                            $count = 5;
                                                                            while($count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $count--;
                                                                            }
                                                                        }else{
                                                                            $count = 0;
                                                                            $total_count = 5- $rating_info['product_rating'];
                                                                            while($count< $rating_info['product_rating']) {
                                                                                echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                                                                $count++;
                                                                            }
                                                                            while($total_count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $total_count--;
                                                                            }
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                @if($product['product_discount']==0)
                                                                    <span ><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($product['product_price'])?>đ</span></span>
                                                                    @else
                                                                    <?php $discounted_price = Product::discounted_price($product['id'])?>
                                                                    <span class="item-price"><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($discounted_price['discounted_price'])?></span>đ</span>
                                                                    <span class = "home-item-old-price"><?php echo number_format($product['product_price'])?>đ<span>
                                                                @endif
                                                            </div>
                                                            <div class="home-item-action">
                                                                <a href="{{url('/product/'.$product['id'])}}">Xem chi tiết</a>
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
                                <ul class="block-links">
                                    <?php $brands = ProductFilter::brands('xe-cuoi'); ?>
                                    @foreach($brands as $brand)
                                    <li><a href="">{{$brand['name']}}</a></li>
                                    @endforeach
                                    <li><a href="/xe-cuoi">Xem tất cả</a></li>
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
                                                        <div class="home-product-discount">
                                                                @if($product['product_discount']>0)
                                                                <span class="product-feature-discount">-{{$product['product_discount']}}%</span>
                                                                @endif
                                                            </div>
                                                            <div class="product-features">
                                                                <?php $is_new = Product::is_new($product['id'])?>
                                                                @if($is_new = "yes")
                                                                <span class="product-feature-new">New</span>
                                                                @endif
                                                                @if(!empty($product['gifts']))
                                                                <span class="product-feature-gift">Quà tặng</span>
                                                                @endif
                                                                @if($product['is_featured']=="Yes")
                                                                <span class="product-feature-hot">Trending</span>
                                                                @endif
                                                            </div>
                                                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                                                <div class="item-image">
                                                                    <img  src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product['product_image'])}}" alt="">
                                                                </div>
                                                            </a>
                                                            <div class="item-details mt-2">
                                                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                                                <div class="">
                                                                    <?php 
                                                                        $rating_info = Product::get_rating($product['id']);
                                                                        $is_rated = $rating_info['is_rated'];
                                                                        if($is_rated=="no"){
                                                                            $count = 5;
                                                                            while($count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $count--;
                                                                            }
                                                                        }else{
                                                                            $count = 0;
                                                                            $total_count = 5- $rating_info['product_rating'];
                                                                            while($count< $rating_info['product_rating']) {
                                                                                echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                                                                $count++;
                                                                            }
                                                                            while($total_count>0) {
                                                                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                                $total_count--;
                                                                            }
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <p class="item-description"><strong>Mã:</strong> {{$product['product_code']}}</p>
                                                                @if($product['product_discount']==0)
                                                                    <span ><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($product['product_price'])?>đ</span></span>
                                                                    @else
                                                                    <?php $discounted_price = Product::discounted_price($product['id'])?>
                                                                    <span class="item-price"><strong>Giá:</strong> <span class="home-item-price"><?php echo number_format($discounted_price['discounted_price'])?></span>đ</span>
                                                                    <span class = "home-item-old-price"><?php echo number_format($product['product_price'])?>đ<span>
                                                                @endif
                                                            </div>
                                                            <div class="home-item-action">
                                                                <a href="{{url('/product/'.$product['id'])}}">Xem chi tiết</a>
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