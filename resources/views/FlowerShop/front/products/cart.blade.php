@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="cart-section">
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col">
                <div class="form">
                    <div class="cart-table-wrapper" >
                        <table class = "table" style = "border: 1px solid #e62263;">
                            <thead style = "background: #e62263; color: #fff; font-size: 16px;">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Giá</td>
                                    <th>Số lượng</th>
                                    <th>Cộng</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>
                                        <div class="cart-item">
                                            <a href="/product/{{$item['product']['id']}}">
                                                <img src="{{url('FlowerShop/front/images-3/product_images/medium/'.$item['product']['product_image'])}}" alt="">
                                                <h5>{{$item['product']['product_name']}}</h5>
                                                <div class="cart-item-versions pb-3">
                                                Size: <span>S</span><br>
                                                Màu: <span>Đỏ</span>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td style ="color: #e02027; font-size: 16px; font-weight: 700;"><?php echo number_format($item['price']) ?></td>
                                    <td><div>{{$item['quantity']}}</div></td>
                                    <td style ="color: #e02027; font-size: 16px; font-weight: 700;"><?php echo number_format($item['sub_total']) ?></td>
                                    <td><button class="btn btn-danger">Xóa</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection