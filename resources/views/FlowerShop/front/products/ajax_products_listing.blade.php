<div class="row gy-2">
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