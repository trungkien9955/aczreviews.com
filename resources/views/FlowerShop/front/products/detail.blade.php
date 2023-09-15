<?php 
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\ProductAttribute;
?>
@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/{{$section_details['url']}}">{{$section_details['section_name']}}</a></li>
                            <li class="breadcrumb-item active"><a href="/product_details/{{$product_details['id']}}">{{$product_details['product_name']}}</a></li>
                        </ol>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="detail-section">
    <div class="container overflow-hidden">
        <div class="detail-wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                        <a href="{{url('FlowerShop/front/images-3/product_images/large/'.$product_details['product_image'])}}">
                            <img src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product_details['product_image'])}}" alt="" width="640" height="240" />
                        </a>
                    </div>
                    <ul class="thumbnails  mt-2">
                        @foreach($product_details['images'] as $image)
                        <li>
                            <a href="{{url('FlowerShop/front/images-3/product_images/large/'.$image['image'])}}" data-standard="{{url('FlowerShop/front/images-3/product_images/medium/'.$image['image'])}}">
                                <img width = "120" height = "120" src="{{url('FlowerShop/front/images-3/product_images/small/'.$image['image'])}}" alt="" />
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="information-wrapper px-2">
                        <div class="information-title ">
                            <div class="product-title ">
                                <a href=""><h2>{{$product_details['product_name']}}</h2></a>
                            </div>
                        </div>
                        @if($product_details['product_discount'] > 0)
                        <div class="information-price mt-4">
                            <?php $discounted_price = Product::discounted_price($product_details['id'])?>
                            <div class="info-price"><h4><?php echo number_format($discounted_price['discounted_price']) ?>đ</h4></div>
                            <div class="info-original-price">
                                <span><?php echo number_format($product_details['product_price']) ?>đ</span>
                            </div>
                            <div class="info-discount">
                                (-<span style = "color: #e02027;">{{$product_details['product_discount']}}%</span>)
                            </div>
                            <div class="info-save">
                                <span><b>Tiết kiệm:</b></span>
                                <span style = "color: #e02027;"><?php echo number_format($discounted_price['saving']) ?>đ</span>
                            </div>
                        </div>
                        @else
                        <div class="information-price mt-4">
                            <div class="info-price"><h4><?php echo number_format($product_details['product_price']) ?>đ</h4></div>
                        </div>
                        @endif
                        <div class="information-description mt-3">
                            <h6><b>Mô tả sản phẩm:</b></h6>
                            <p>{{$product_details['description']}}</p>
                        </div>
                        <div class="information-sku">
                            <div class="info-code">
                                <span><b>Mã sản phẩm</b>:</span>
                                <span >{{$product_details['product_code']}}</span>
                            </div>
                            <div class="info-availability">
                                <span><b>Tình trạng:</b></span>
                                <?php $stock = ProductAttribute::stock($product_details['id'], "Small", "")?>
                                @if($stock > 0)
                                <span >Còn hàng</span>
                                @else
                                <span >Tạm hết hàng</span>
                                @endif
                            </div>
                            <div class="info-stock">
                                <span><b>Trong kho:</b></span>
                                <span style = "color: var(--color-success);">40</span>
                            </div>
                        </div>
                        <div class="info-offer mt-2">
                            <div class="offer-header">
                                <i class="fa-solid fa-gift"></i>
                                <span><b>KHUYẾN MẠI:</b></span>
                            </div>
                            <div class="offer-content mt-1">
                                <div class="offer-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                </div>
                                <div class="offer-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                </div>
                                <div class="offer-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                </div>
                            </div>
                        </div>
                        <div class="information-variants mt-3">
                            <div class="info-color-variants w-33">
                                <div class="form-group">
                                    <label for="color-selection">Chọn màu</label>
                                    <select name="" id="" class = "form-control" >
                                    <option value="">Đỏ</option>
                                    <option value="">Vàng</option>
                                    <option value="">Tím</option>
                                </select>
                                </div>
                            </div>
                            <div class="info-color-variants w-25">
                                <span>Chọn size:</span>
                                <select class = "form-control" name="" id="">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                            </div>
                            <div class="info-quantity w-25">
                                <div class="form-group">
                                <label for="color-selection">Số lượng:</label>
                                <input class = "form-control" type="text" value = "1">
                                </div>
                            </div>
                        </div>
                        <div class="info-action mt-3">
                            <a href="" class = "buy-button">MUA NGAY</a>
                            <a href="" class = "cart-button">+ GIỎ HÀNG</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="detail-tabs-wrapper">
                        <div class="detail-tabs-nav">
                            <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist" >
                                <li class="nav-item" role="presentation">
                                    <button class = "nav-link active" id="detail-tab-description-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-description">Mô tả</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button  class = "nav-link " id="detail-tab-specs-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-specs">Thông số</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button  class = "nav-link " id="detail-tab-review-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-review">Đánh giá</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active"id="detail-tab-description" role="tabpanel" aria-labelledby="detail-tab-description-tab">
                                <div class="m-auto p-3 mt-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <img  src="{{url('front/images-3/new_images/new-flower-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade"id="detail-tab-specs" role="tabpanel">
                                <div class="m-auto p-3 mt-2"style = "min-height: 426px;">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td><b>Chất liệu</b></td>
                                                <td>Hoa tươi</td>
                                            </tr>
                                            <tr>
                                                <td><b>Chất liệu</b></td>
                                                <td>Hoa tươi</td>
                                            </tr>
                                            <tr>
                                                <td><b>Chất liệu</b></td>
                                                <td>Hoa tươi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade"id="detail-tab-review"role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-12 overflow-hidden">
                                            <div class="total-score-wrapper mt-5">
                                                <h6>Điểm đánh giá</h6>
                                                <div class="circle-wrapper">
                                                    <span>8.5</span>
                                                </div>
                                                <h6>23 đánh giá</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 ">
                                            <div class="your-review-wrapper mt-3">
                                                <h5>Gửi đánh giá của bạn:</h5>
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="review-author">Họ tên</label>
                                                        <input type="text" class="form-control" name = "review-author" id="review-author"  >
                                                        <label for="review-email">Email</label>
                                                        <input type="email" class="form-control" name = "review-email" id="review-email" >
                                                        <label for="review-title">Nội dung đánh giá</label>
                                                        <textarea class="form-control"  rows="2"></textarea>
                                                    </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2">Gửi đánh giá</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="row">
                                        <div class="col">
                                            <div class="review-data-wrapper m-auto">
                                                <div class="review-data-header">
                                                    <h6>Đánh giá (<span>15</span>):</h6>
                                                </div>
                                                <div class="review-data-items">
                                                    <div class="review-item mb-2">
                                                        <div class="review-item-author">
                                                            <h6><b>Ngọc Anh</b></h6>
                                                            <h6>08-07-2023</h6>
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                        </div>
                                                    </div>
                                                    <div class="review-item mb-2">
                                                        <div class="review-item-author">
                                                        <h6><b>Ngọc Anh</b></h6>
                                                            <h6>08-07-2023</h6>
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                        </div>
                                                    </div>
                                                    <div class="review-item mb-2">
                                                        <div class="review-item-author">
                                                        <h6><b>Ngọc Anh</b></h6>
                                                            <h6>08-07-2023</h6>
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
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
            </div>
        </div>
    </div>
</div>
<div class="similar-products-section mt-5">
    <div class="container overflow-hidden">
        <div class="similar-products-wrapper">
            <div class="row">
                <div class="col">
                    <div class="similar-products-header">
                        <h4>Sản phẩm tương tự</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="recent-products-section mt-5">
    <div class="container overflow-hidden">
        <div class="recent-products-wrapper">
            <div class="row">
                <div class="col">
                    <div class="recent-products-header">
                        <h4>Sản phẩm đã xem</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="item m-auto">
                        <a href="" class="item-image-wrapper">
                            <div class="item-image">
                                <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="item-details mt-2">
                            <h3 class="item-name">HOA LY</h3>
                            <p class="item-description"><strong>Mã:</strong> LY01</p>
                            <p class="item-description"><strong>Giá:</strong> 500,000Đ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection