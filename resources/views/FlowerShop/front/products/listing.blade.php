<?php 
use App\Models\FlowerShop\Product;
use App\Models\FlowerShop\ProductAttribute;
use App\Models\FlowerShop\ProductFilter;
?>
@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="listing-section mb-3">
    <div class="container overflow-hidden">
        <div class="row mt-1">
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
        <div class="row mt-1">
            <div class="col">
                <div class="listing-title">
                    <h3><i class="fa-solid fa-angles-right"></i>&nbsp;<span>{{$section['section_name']}}</span>&nbsp;(<span>{{$count}}</span>&nbsp;sản phẩm)</h3>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col ">
                <div class="sorter-wrapper clearfix">
                    <div class="sorter w-20" >
                        <form action="" name = "sorter">
                            <input type="hidden" name = "url" id= "url" value = {{$url}}>
                            <div class="form-group">
                                <select name="sorter" id="sorter" class = "form-control" method = "GET">
                                    <option value="">Sắp xếp</option>
                                    <option value="lowest">Giá từ thấp đến cao</option>
                                    <option value="highest">Giá từ cao đến thấp</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @include('FlowerShop.front.products.filters')
            <div class="col-lg-9">
                <div class="row gy-2 filter-products-container">
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-xs-2">
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
</div>
@endsection