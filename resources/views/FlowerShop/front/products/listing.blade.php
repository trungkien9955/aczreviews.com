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
                            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                                <div class="item-image">
                                    <img  src="{{url('front/images-3/new_images/new-flower-1.jpg')}}" alt="">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection