@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="cart-section">
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