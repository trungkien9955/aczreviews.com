@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="search-section">
    <div class="container overflow-hidden">
        <div class="row mt-1">
            <div class="col">
                <div class="search-header">
                    @if($count==0)
                    <h5>Không tìm thấy sản phẩm phù hợp.</h5>
                    @else
                    <h4>Tìm thấy&nbsp;<span style = "color: #e62263;"><b>{{$count}}</b></span> sản phẩm.
                    </h4>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row gy-4 search-products-container">
                    @if($count>0)
                    @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-xs-2">
                        <div class="item m-auto">
                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                <div class="item-image">
                                    <img  src="{{url('FlowerShop/front/images-3/product_images/small/'.$product['product_image'])}}" alt="">
                                </div>
                            </a>
                            <div class="item-details mt-2">
                                <h3 class="item-name">{{$product['product_name']}}</h3>
                                <p class="item-description"><strong>Mã:</strong> LY01</p>
                                <p class="item-description"><strong>Giá:</strong> {{$product['product_price']}}đ</p>
                            </div>
                       </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection