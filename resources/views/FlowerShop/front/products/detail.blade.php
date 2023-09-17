<?php 
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\ProductAttribute;
use App\Models\FlowerShop\ProductFilter;
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
                    <div class="product-detail-image" style = "overflow:hidden">
                            <img src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product_details['product_image'])}}" alt="" width = "640" height = "360"/>
                    </div>
                    <ul class="gallery mt-2">
                        @foreach($product_details['images'] as $image)
                        <li style = "margin-right: 4px;" class = "d-xs-inline-flex">
                                <img width = "120" height = "120" src="{{url('FlowerShop/front/images-3/product_images/small/'.$image['image'])}}" alt="" />
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="information-wrapper px-2">
                        <div class="information-title ">
                            <div class="product-title ">
                                <h2>{{$product_details['product_name']}}</h2>
                            </div>
                        </div>
                        <div class="information-price mt-4">
                            @if($product_details['product_discount'] > 0)
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
                            @else
                            <div class="info-price"><h4><?php echo number_format($product_details['product_price']) ?>đ</h4></div>
                            @endif
                        </div>
                        <div class="information-description mt-3">
                            <h6><b>Mô tả sản phẩm:</b></h6>
                            <p>{{$product_details['description']}}</p>
                        </div>
                        <div class="information-sku">
                            <div class="info-code">
                                <span><b>Mã sản phẩm</b>:</span>
                                <span style = "color: #e62263;font-weight: 700;">{{$product_details['product_code']}}</span>
                            </div>
                            <div class="info-availability">
                                <span><b>Tình trạng:</b></span>
                                <?php 
                                $stock = ProductAttribute::stock($product_details['id']);
                                $attributes = Product::with('attributes')->where('id',$product_details['id'])->first()->toArray();
                                ?>
                                <div class="stock-check">
                                @if($stock > 0)
                                <span style = "color: #5CB85C;font-weight: 700;">Còn hàng</span>
                                @else
                                <span style = "color: #e02027;font-weight: 700;" >Tạm hết hàng</span>
                                @endif 
                                </div>
                            </div>
                            <div class="info-stock">
                                <span><b>Trong kho:</b></span>
                                <span class = "stock-data" style = "color: var(--color-success); font-weight: 900;">{{$stock}}</span>
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
                            <form action="" id = "variants_form" name = "variants_form" method = "post">@csrf
                                <input type="hidden" name= "product_id" id = "product_id" value = "{{$product_details['id']}}">
                                <div class="info-color-variants">
                                    <p style = "margin: 0"><b>Chọn màu:</b></p>
                                    <div class="variant_selection">
                                        @foreach($product_details['attributes'] as $attribute)
                                        <label><input type="checkbox" name="color" class = "color_option" value="{{$attribute['color']}}"><span>{{$attribute['v_color']}}</span></label>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="info-color-variants mt-3">
                                    <p style = "margin: 0"><b>Chọn size:</b></p>
                                    <div class="variant_selection">
                                        @foreach($product_details['attributes'] as $attribute)
                                        <label><input type="checkbox" name="size" class = "size_option" value="{{$attribute['size']}}"><span>{{$attribute['size']}}</span></label>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="info-quantity mt-3 w-25">
                                    <div class="form-group">
                                    <label for="color-selection"><b>Số lượng:</b></label>
                                    <input class = "form-control" type="text" value = "1">
                                    </div>
                                </div>
                            </form>
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
                                    <button class = "nav-link active" id="detail-tab-description-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-description">Mô tả sản phẩm</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button  class = "nav-link " id="detail-tab-specs-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-specs">Thông số sản phẩm</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button  class = "nav-link " id="detail-tab-review-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-review">Đánh giá sản phẩm</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active"id="detail-tab-description" role="tabpanel" aria-labelledby="detail-tab-description-tab">
                                <div class="product_desc m-auto p-3 mt-2">
                                    <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;">Mô tả sản phẩm {{$product_details['product_name']}}</h3>
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</i>.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <div style = "text-align:center"><img src = "/FlowerShop/front/images-3/new_images/new-flower-2.jpg"></div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <div style = "text-align:center"> <img src = "/FlowerShop/front/images-3/new_images/new-flower-3.jpg"></div>
                                    <?php 
                                    $description = Product::get_description($product_details['id']);
                                    // dd($description);
                                    // echo $description_html =  htmlspecialchars_decode($description['description']);
                                    ?>
                                    {!!$description['description']!!}
                                </div>
                            </div>
                            <div class="tab-pane fade"id="detail-tab-specs" role="tabpanel">
                                <div class="m-auto p-3 mt-2"style = "min-height: 426px;">
                                    <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;">Thông số sản phẩm {{$product_details['product_name']}}</h3>
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <?php 
                                            $filters = ProductFilter::filters();
                                            ?>
                                            @foreach($filters as $filter)
                                            <?php 
                                            $available_filter = ProductFilter::available_filters($section_details['url'], $filter['id']);
                                            ?>
                                            @if($available_filter == "Yes")
                                            <tr>
                                                <td><b>{{$filter['filter_name']}}</b></td>
                                                <td>                                                    @foreach($filter['filter_values'] as $value)
                                                    @if(!empty($product_details[$filter['filter_column']]) && $value['filter_value'] == $product_details[$filter['filter_column']]) 
                                                    {{$value['filter_value']}}
                                                    @endif
                                                @endforeach
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade"id="detail-tab-review"role="tabpanel">
                                    <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;margin-top: 24px;">Đánh giá sản phẩm {{$product_details['product_name']}}</h3>
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
                                                        <label for="review-author">Tên</label>
                                                        <input type="text" class="form-control" name = "review-author" id="review-author"  >
                                                        <label for="review-email">Email</label>
                                                        <input type="email" class="form-control" name = "review-email" id="review-email" >
                                                        <label for="review-email">Nhập điểm đánh giá (Từ 1 đến 10)</label>
                                                        <input type="number" class="form-control" name = "review-score" id="review-score" >
                                                        <label for="review-title">Nhập nội dung đánh giá</label>
                                                        <textarea class="form-control"  rows="2"></textarea>
                                                    </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2">Gửi đánh giá</button>
                                                </form>
                                            </div>
                                        </div>
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