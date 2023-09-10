@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="">Link 1</a></li>
                            <li class="breadcrumb-item"><a href="">Link 2</a></li>
                            <li class="breadcrumb-item active"><a href="">Link 3</a></li>
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
                        <a href="{{url('FlowerShop/front/images-3/new_images_large/new-flower-1-large.jpg')}}">
                            <img src="{{url('FlowerShop/front/images-3/new_images_medium/new-flower-1-medium.jpg')}}" alt="" width="640" height="360" />
                        </a>
                    </div>
                    <ul class="thumbnails d-flex justify-content-evenly mt-2">
                        <li>
                            <a href="{{url('FlowerShop/front/images-3/new_images_large/new-flower-2-large.jpg')}}" data-standard="{{url('FlowerShop/front/images-3/new_images_medium/new-flower-2-medium.jpg')}}">
                                <img width = "150" height = "150" src="{{url('FlowerShop/front/images-3/new_images/new-flower-2.jpg')}}" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="{{url('FlowerShop/front/images-3/new_images_large/new-flower-3-large.jpg')}}" data-standard="{{url('FlowerShop/front/images-3/new_images_medium/new-flower-3-medium.jpg')}}">
                                <img width = "150" height = "150" src="{{url('FlowerShop/front/images-3/new_images/new-flower-3.jpg')}}" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="{{url('FlowerShop/front/images-3/new_images_large/new-flower-4-large.jpg')}}" data-standard="{{url('FlowerShop/front/images-3/new_images_medium/new-flower-4-medium.jpg')}}">
                                <img width = "150" height = "150" src="{{url('FlowerShop/front/images-3/new_images/new-flower-4.jpg')}}" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="information-wrapper">
                        <div class="information-title ">
                            <div class="product-title ">
                                <a href=""><h2>{{$product['product_name']}}</h2></a>
                            </div>
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="">Link 1</a></li>
                                <li class="breadcrumb-item"><a href="">Link 2</a></li>
                                <li class="breadcrumb-item active"><a href="">Link 3</a></li>
                            </ol>
                        </div>
                        <div class="information-description">
                            <h6><b>Mô tả sản phẩm:</b></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        <div class="information-price">
                            <div class="info-price"><h4>200000đ</h4></div>
                            <div class="info-original-price">
                                <span><b>Giá gốc:</b></span>
                                <span>200000đ</span>
                            </div>
                            <div class="info-discount">
                                <span><b>Giảm giá:</b></span>
                                <span>15%</span>
                            </div>
                            <div class="info-save">
                                <span><b>Tiết kiệm:</b></span>
                                <span>20000đ</span>
                            </div>
                        </div>
                        <div class="information-sku">
                            <h6><b>SKU:</b></h6>
                            <div class="info-availability">
                                <span>Tình trạng:</span>
                                <span >Còn hàng</span>
                            </div>
                            <div class="info-stock">
                                <span>Trong kho:</span>
                                <span>40</span>
                            </div>
                        </div>
                        <div class="information-variants">
                            <h6>Chọn sản phẩm:</h6>
                            <div class="info-color-variants">
                                <span>Chọn màu:</span>
                                <select name="" id="">
                                    <option value="">Đỏ</option>
                                    <option value="">Vàng</option>
                                    <option value="">Tím</option>
                                </select>
                            </div>
                            <div class="info-color-variants">
                                <span>Chọn size:</span>
                                <select name="" id="">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                            </div>
                        </div>
                        <div class="information-quantity">
                            <form action="">
                                <span>Số lượng:</span>
                                <input type="text" value = "1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="detail-tabs-wrapper">
                        <div class="detail-tabs-nav">
                            <ul>
                                <li class="nav-item">
                                    <a href="" class = "nav-link active">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                <a href="" class = "nav-link ">Thông số</a>
                                </li>
                                <li class="nav-item">
                                <a href="" class = "nav-link ">Đánh giá</a>
                                </li>
                            </ul>
                        </div>
                        <div class="detail-tabs-content">
                            <div class="tab-pane">
                                <div class="detail-tab-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <img  src="{{url('front/images-3/new_images/new-flower-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane">
                                <div class="detail-tab-wrapper">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Chất liệu</td>
                                                <td>Hoa tươi</td>
                                            </tr>
                                            <tr>
                                                <td>Chất liệu</td>
                                                <td>Hoa tươi</td>
                                            </tr>
                                            <tr>
                                                <td>Chất liệu</td>
                                                <td>Hoa tươi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane">
                                <div class="detail-tab-wrapper">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <div class="total-score-wrapper">
                                                <h6>Điểm đánh giá</h6>
                                                <div class="circle-wrapper">
                                                    <h1>4.5</h1>
                                                </div>
                                                <h6>23 đánh giá</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <div class="star-rating-wrapper">
                                                <h6>Star</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="your-review-wrapper">
                                                <h6>Gửi đánh giá của bạn:</h6>
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="review-author">Họ tên</label>
                                                        <input type="text" class="form-control" name = "review-author" id="review-author"  >
                                                        <label for="review-email">Email</label>
                                                        <input type="email" class="form-control" name = "review-email" id="review-email" >
                                                        <label for="review-title">Tiêu đề</label>
                                                        <input type="text" class="form-control" name = "review-title" id="review-title"  >
                                                        <label for="review-title">Nội dung đánh giá</label>
                                                        <input type="text" class="form-control" name = "review-content" id="review-title" >
                                                    </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="review-data-wrapper">
                                                <div class="review-data-header">
                                                    <h6>Đánh giá <span>15</span></h6>
                                                </div>
                                                <div class="review-data-items">
                                                    <div class="review-item">
                                                        <div class="review-item-author">
                                                            <h5>Ngọc Anh</h5>
                                                            <h6>08-07-2023</h6>
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>Sản phẩm tốt!</p>
                                                        </div>
                                                    </div>
                                                    <div class="review-item">
                                                        <div class="review-item-author">
                                                            <h5>Ngọc Anh</h5>
                                                            <h6>08-07-2023</h6>
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>Sản phẩm tốt!</p>
                                                        </div>
                                                    </div>
                                                    <div class="review-item">
                                                        <div class="review-item-author">
                                                            <h5>Ngọc Anh</h5>
                                                            <h6>08-07-2023</h6>
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>Sản phẩm tốt!</p>
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
<div class="similar-products-section">
    <div class="container overflow-hidden">
        <div class="similar-products-wrapper">
            <div class="row">
                <div class="col">
                    <div class="similar-products-header">
                        <h4>Sản phẩm tương tự</h4>
                    </div>
                </div>
            </div>
            <div class="row">
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
<div class="recent-products-section">
    <div class="container overflow-hidden">
        <div class="recent-products-wrapper">
            <div class="row">
                <div class="col">
                    <div class="recent-products-header">
                        <h4>Sản phẩm đã xem</h4>
                    </div>
                </div>
            </div>
            <div class="row">
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