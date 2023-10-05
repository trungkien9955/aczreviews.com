@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="cart-section">
    <div class="cart-hero-image" style = "background-image: url('{{url('FlowerShop/front/images-3/background_images/background-7.png')}}'); width: 100%; height: 300px;" >
    </div>
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col">
                <div class="cart-table-container">
                    @include('FlowerShop.front.products.cart_table_container')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection