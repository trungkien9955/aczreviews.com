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
                    <div class="zoom-area">
                        <img  src="{{url('front/images-3/new_images/new-flower-2.jpg')}}" alt="">
                        <div class="gallery">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="information-wrapper">
                        <div class="information-title">
                            <div class="product-title">
                                <a href=""><h1>Product name</h1></a>
                            </div>
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="">Link 1</a></li>
                                <li class="breadcrumb-item"><a href="">Link 2</a></li>
                                <li class="breadcrumb-item active"><a href="">Link 3</a></li>
                            </ol>
                        </div>
                        <div class="information-description">
                            <h6>Mô tả sản phẩm:</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        <div class="information-price">
                            <div class="info-price"><h4>200000đ</h4></div>
                            <div class="info-original-price">
                                <span>Original price:</span>
                                <span>200000đ</span>
                            </div>
                            <div class="info-discount">
                                <span>Discount:</span>
                                <span>15%</span>
                            </div>
                            <div class="info-save">
                                <span>Save:</span>
                                <span>20000đ</span>
                            </div>
                        </div>
                        <div class="information-sku">
                            <h6>SKU:</h6>
                            <div class="info-availability">
                                <span>Tình trạng:</span>
                                <span>Còn hàng</span>
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
                                    <a href="">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                <a href="">Thông số</a>
                                </li>
                                <li class="nav-item">
                                <a href="">Đánh giá</a>
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
                                            <div class="your-rating-wrapper">
                                                <h6>Post your review:</h6>
                                                <form action="">
                                                    
                                                </form>
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
@endsection