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
    <div class="container">
        <div class="detail-wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="product-detail-image-container ">
                            @if($product_details['product_attribute'] == 'no')
                            <img src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product_details['product_image'])}}" class="product-detail-image" alt="" width = "640" height = "360"/>
                            @else
                            <?php 
                               $lowest_attr = ProductAttribute::get_attr_with_lowest_price($product_details['id']);
                            ?>
                            @if(!empty($lowest_attr['image']))
                            <img src="{{url('FlowerShop/front/images-3/product_images/medium/'.$lowest_attr['image'])}}" class="product-detail-image" alt="" width = "640" height = "360"/>
                            @else
                            <img src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product_details['product_image'])}}" class="product-detail-image" alt="" width = "640" height = "360"/>
                            @endif
                            @endif
                    </div>
                    <ul class="gallery mt-2">
                        @foreach($product_details['images'] as $image)
                        <li style = "margin-right: 4px;" class = "d-xs-inline-flex">
                                <img  src="{{url('FlowerShop/front/images-3/product_images/small/'.$image['image'])}}" class = "gallery-image" alt="" />
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="information-wrapper px-2">
                        <div class="information-title ">
                            <div class="product-title ">
                                <h2>{{$product_details['product_name']}}</h2>
                                <div class="info-rating">
                                    <?php 
                                    $rating_info = Product::get_rating($product_details['id']);
                                    $count = 0;
                                    $total_count = 5- $rating_info['product_rating_for_star'];
                                    while($count< $rating_info['product_rating_for_star']) {
                                        echo '<span style = "color:#ffc700; font-size: 36px;">&#9733;</span>';
                                        $count++;
                                    }
                                    while($total_count>0) {
                                        echo '<span style = "color:#ccc; font-size: 36px;">&#9733;</span>';
                                        $total_count--;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="information-price mt-4">
                            @if($product_details['product_attribute'] == 'no')
                            @if($product_details['product_discount'] > 0)
                            <?php $discounted_price = Product::discounted_price($product_details['id'])?>
                            <div class="info-price"><h4><span><?php echo number_format($discounted_price['discounted_price']) ?></span>đ</h4></div>
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
                            @else
                            <?php $lowest_price = ProductAttribute::get_lowest_attr_price($product_details['id']);?>
                            @if($product_details['product_discount'] > 0)
                            <div class="info-price"><h4><span><?php echo number_format($lowest_price_discounted = $lowest_price- $lowest_price*$product_details['product_discount']/100) ?></span>đ</h4></div>
                            <div class="info-original-price">
                                <span><?php echo number_format($lowest_price) ?>đ</span>
                            </div>
                            <div class="info-discount">
                                (-<span style = "color: #e02027;">{{$product_details['product_discount']}}%</span>)
                            </div>
                            <div class="info-save">
                                <span><b>Tiết kiệm:</b></span>
                                <span style = "color: #e02027;"><?php echo number_format($lowest_price - $lowest_price_discounted) ?>đ</span>
                            </div>
                            @else
                            <div class="info-price"><h4><?php echo number_format($lowest_price) ?>đ</h4></div>
                            @endif
                            @endif
                        </div>
                        <div class="information-description mt-3">
                            <h6><b>Mô tả sản phẩm:</b></h6>
                            <p>{{$product_details['description']}}</p>
                        </div>
                        <div class="information-sku">
                            <div class="info-code">
                                <span><b>Mã sản phẩm</b>:</span>
                                @if($product_details['product_attribute'] == 'no')
                                <span style = "color: #e62263;font-weight: 700;">{{$product_details['product_code']}}</span>
                                @else
                                <?php 
                               $lowest_attr = ProductAttribute::get_attr_with_lowest_price($product_details['id']);
                                ?>
                                <span style = "color: #e62263;font-weight: 700;" class = "attr-sku"> {{$lowest_attr['sku']}}</span>
                                @endif
                            </div>
                            <div class="info-availability">
                                <span><b>Tình trạng:</b></span>
                                @if($product_details['product_attribute'] == 'no')
                                <div class="stock-check">
                                @if($product_details['product_stock'] > 0)
                                <span style = "color: #5CB85C;font-weight: 700;">Còn hàng</span>
                                @else
                                <span style = "color: #e02027;font-weight: 700;" >Tạm hết hàng</span>
                                @endif 
                                </div>
                                @else
                                <?php 
                               $lowest_attr = ProductAttribute::get_attr_with_lowest_price($product_details['id']);
                                ?>
                                <div class="stock-check">
                                @if($lowest_attr['stock'] > 0)
                                <span style = "color: #5CB85C;font-weight: 700;">Còn hàng</span>
                                @else
                                <span style = "color: #e02027;font-weight: 700;" >Tạm hết hàng</span>
                                @endif 
                                </div>
                                @endif
                            </div>
                            <div class="info-stock">
                                @if($product_details['product_attribute'] == 'no')
                                <span><b>Trong kho:</b></span>
                                <span class = "stock-data" style = "color: var(--color-success); font-weight: 900;">{{$product_details['product_stock']}}</span>
                                @else
                                <?php 
                               $lowest_attr = ProductAttribute::get_attr_with_lowest_price($product_details['id']);
                                ?>
                                <span><b>Trong kho:</b></span>
                                <span class = "stock-data" style = "color: var(--color-success); font-weight: 900;">{{$lowest_attr['stock']}}</span>
                                @endif
                            </div>
                        </div>
                        @if(!empty($product_details['offers']))
                        <div class="info-offer mt-2">
                            <div class="offer-header">
                                <i class="fa-solid fa-gift"></i>
                                <span><b>KHUYẾN MẠI:</b></span>
                            </div>
                            <div class="offer-content mt-1">
                                @foreach($product_details['offers'] as $offer)
                                <div class="offer-item">
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ $offer['name']}}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @if(!empty($product_details['gifts']))
                        <div class="info-gift mt-2">
                            <div class="info-gift-inner-wrapper">
                                <div class="gift-header">
                                    <img src="{{url('FlowerShop/front/images-3/icon_images/gift-2.png')}}" alt="">
                                    <span><b>QUÀ TẶNG:</b></span>
                                </div>
                                <div class="gift-content mt-1">
                                    @foreach($product_details['gifts'] as $gift)
                                    <div class="gift-item">
                                        <i class="fa-solid fa-check"></i>
                                        <span>{{$gift['name']}}&nbsp;(Trị giá:&nbsp; <span style = "color:#e02027;"><?php echo number_format($gift['price']) ?></span>đ)</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(Session::has('success_message'))
                        <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                        <strong>Thành công:</strong>{{Session::get('success_message')}}
                        </div>
                        @endif
                        @if(Session::has('error_message'))
                        <div class = "alert alert-danger alert-dismissible fade show" role = "alert">
                        <strong>Lỗi:</strong>{{Session::get('error_message')}}
                        </div>
                        @endif
                        <form action="/cart/add" id = "cart_form" name = "cart_form" method = "post">@csrf
                            <div class="information-variants mt-3">
                                <input type="hidden" name= "product_id" id = "product_id" value = "{{$product_details['id']}}">
                                @if($product_details['product_attribute'] == 'yes')
                                <?php 
                                $attr_with_color = ProductAttribute::get_attr_with_color($product_details['id']);
                                $colors = ProductAttribute::get_colors($product_details['id']);
                                ?>
                                <div class="info-color-variants">
                                    <p style = "margin: 0"><b>Chọn màu:</b></p>
                                    <div class="variant_selection">
                                        @foreach($attr_with_color as $attr)
                                        <label><input type="radio" name="color" class = "color_option" value="{{$attr['v_color']}}" @if($attr['v_color'] == $lowest_attr['v_color']) checked @endif><span>{{$attr['v_color']}}</span></label>
                                        @endforeach
                                    </div>
                                </div>
                                <?php 
                                $attr_with_size = ProductAttribute::get_attr_with_size($product_details['id']);
                                $sizes = ProductAttribute::get_sizes($product_details['id']);
                                ?>
                                <div class="info-color-variants mt-3">
                                    <p style = "margin: 0"><b>Chọn size:</b></p>
                                    <div class="variant_selection">
                                        @foreach( $sizes as $size)
                                        <label><input type="radio" name="size" class = "size_option" value="{{$size}}" @if($size == $lowest_attr['size']) checked @endif><span>{{$size}}</span></label>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                <div class="info-quantity mt-3 w-25">
                                    <div class="form-group">
                                    <label for="color-selection"><b>Số lượng:</b></label>
                                    <input class = "form-control" name = "quantity" type="text" value = "1">
                                    </div>
                                </div>
                            </div>
                            <div class="info-action mt-3">
                                <button type = "submit" class = "buy-button">MUA NGAY</button>
                                <button type = "submit" class = "cart-button">+ GIỎ HÀNG</button>
                            </div>
                        </form>
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
                                    <?php $rating_info = Product::get_rating($product_details['id'])?>
                                        <div class="col-lg-6 col-md-6 col-xs-12 overflow-hidden">
                                            <div class="total-score-wrapper mt-5">
                                                <h6>Điểm đánh giá (Thang điểm 5)</h6>
                                                <div class="circle-wrapper">
                                                    <span>{{$rating_info['product_rating']}}</span>
                                                </div>
                                                <h6>{{$rating_info['product_rating_count']}} đánh giá</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 ">
                                            <div class="your-review-wrapper mt-3">
                                                @if(Session::has('success_message'))
                                                <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                                                <strong>Thành công:</strong>{{Session::get('success_message')}}
                                                </div>
                                                @endif
                                                @if(Session::has('error_message'))
                                                <div class = "alert alert-warning alert-dismissible fade show" role = "alert">
                                                <strong>Lỗi:</strong>{{Session::get('error_message')}}
                                                </div>
                                                @endif
                                                @if($errors->any())
                                                <div class = "alert alert-warning alert-dismissible fade show" role = "alert">
                                                <strong>Lỗi:</strong>    
                                                <?php echo implode('', $errors->all('<div>:message</div>')); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                @endif
                                                @if(!Auth::check())
                                                <h5>Gửi đánh giá của bạn (Không cần đăng nhập):</h5>
                                                <form action="javascript:void(0);" id = "guest-rating-form">@csrf
                                                    <input type="hidden" id= "guest_rating_product_id" name = "product_id" value = "{{$product_details['id']}}">
                                                    <div class="form-group">
                                                        <label for="review_author">Tên</label>
                                                        <input type="text" class="form-control" name = "review_author" id="review_author" required >
                                                        <label for="review_email">Email</label>
                                                        <input type="email" class="form-control" name = "review_email" id="review_email" maxlength = "500" required>
                                                        <label for="review_phone">Số điện thoại (Không bắt buộc)</label>
                                                        <input type="text" class="form-control" name = "review_phone" id="review_phone" maxlength = "12">
                                                        <label for="">Chọn sao đánh giá</label><br>
                                                        <div class="rate">
                                                            <input style = "display:none;" type="radio" id="guest_rating_star5" name="guest_rating" value="5" />
                                                            <label for="guest_rating_star5" title="text">5 stars</label>
                                                            <input style = "display:none;" type="radio" id="guest_rating_star4" name="guest_rating" value="4" />
                                                            <label for="guest_rating_star4" title="text">4 stars</label>
                                                            <input style = "display:none;" type="radio" id="guest_rating_star3" name="guest_rating" value="3" />
                                                            <label for="guest_rating_star3" title="text">3 stars</label>
                                                            <input style = "display:none;" type="radio" id="guest_rating_star2" name="guest_rating" value="2" />
                                                            <label for="guest_rating_star2" title="text">2 stars</label>
                                                            <input style = "display:none;" type="radio" id="guest_rating_star1" name="guest_rating" value="1" />
                                                            <label for="guest_rating_star1" title="text">1 star</label>
                                                        </div><br>
                                                        <textarea class="form-control" name = "comment" id = "comment" rows="2" maxlength = "500" placeholder = "Nhập nội dung đánh giá"required></textarea>
                                                    </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2">Gửi đánh giá</button>
                                                </form>
                                                <div id="guest-rating-message"></div>
                                                @else
                                                <h5>Gửi đánh giá của bạn:</h5>
                                                <form action="javascript:void(0);" id = "user-rating-form">@csrf
                                                    <input type="hidden" id= "user_rating_product_id" name = "product_id" value = "{{$product_details['id']}}">
                                                    <input type="hidden" id= "user_rating_user_id" name = "user_id" value = "{{Auth::user()->id}}">
                                                    <div class="form-group">
                                                        <label for="">Chọn sao đánh giá</label><br>
                                                        <div class="rate">
                                                            <input style = "display:none;" type="radio" id="user_rating_star5" name="user_rating" value="7" />
                                                            <label for="user_rating_star5" title="text">5 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star4" name="user_rating" value="8" />
                                                            <label for="user_rating_star4" title="text">4 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star3" name="user_rating" value="3" />
                                                            <label for="user_rating_star3" title="text">3 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star2" name="user_rating" value="2" />
                                                            <label for="user_rating_star2" title="text">2 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star1" name="user_rating" value="1" />
                                                            <label for="user_rating_star1" title="text">1 star</label>
                                                        </div><br>
                                                        <textarea class="form-control" name = "review" id = "review" rows="2" maxlength = "500" placeholder = "Nhập nội dung đánh giá"required></textarea>
                                                    </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2">Gửi đánh giá</button>
                                                </form>
                                                <div id="user-rating-message"></div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="review-data-wrapper m-auto">
                                                <div class="review-data-header">
                                                    <h6>Đánh giá (<span>{{$rating_info['product_rating_count']}}</span>):</h6>
                                                </div>
                                                <div class="review-data-items">
                                                    @foreach($rating_info['rating_info'] as $rating)
                                                    <div class="review-item mb-2">
                                                        <div class="review-item-author">
                                                            <h6>
                                                                <b>{{$rating['user']['name']}}</b>
                                                                @if(!empty($rating['user_id']))
                                                                <span class="badge bg-primary">Thành viên</span>
                                                                @endif
                                                                <?php 
                                                                $count = 0;
                                                                $total_count= 5-$rating['rating'];
                                                                while($count< $rating['rating']) {
                                                                    echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                                                    $count++;
                                                                }
                                                                while($total_count>0){
                                                                    echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                    $total_count--;
                                                                }
                                                                ?>
                                                            </h6>
                                                            @if(!empty($rating['created_at']))
                                                            <h6>{{$rating['created_at']}}</h6>
                                                            @else
                                                            <h6>...</h6>
                                                            @endif
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>{{$rating['review']}} </p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <?php $guest_rating_info = Product::get_guest_rating($product_details['id'])?>
                                                    @if($guest_rating_info['is_rated_by_guest']=="yes")
                                                    @foreach($guest_rating_info['guest_rating_info'] as $guest_rating)
                                                    <div class="review-item mb-2">
                                                        <div class="review-item-author">
                                                            <h6>
                                                                <b>{{$guest_rating['name']}}</b>
                                                                <span class="badge bg-secondary">Khách</span>
                                                                <?php 
                                                                $count = 0;
                                                                $total_count= 5-$guest_rating['rating'];
                                                                while($count< $guest_rating['rating']) {
                                                                    echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                                                    $count++;
                                                                }
                                                                while($total_count>0){
                                                                    echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                                                    $total_count--;
                                                                }
                                                                ?>
                                                            </h6>
                                                            @if(!empty($guest_rating['created_at']))
                                                            <h6>{{$guest_rating['created_at']}}</h6>
                                                            @else
                                                            <h6>...</h6>
                                                            @endif
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>{{$guest_rating['comment']}} </p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
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
                        <h5>Sản phẩm tương tự</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-3 similar-products-content">
                @foreach($similar_products as $product)
                <div class="col-lg-3 col-md-4 col-xs-6">
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
                </div>
                @endforeach
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
                        <h5>Sản phẩm đã xem</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($viewed_products as $product)
                <div class="col-lg-3 col-md-4 col-xs-6">
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
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection