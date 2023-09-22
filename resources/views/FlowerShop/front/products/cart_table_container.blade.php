<form>
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
                                @if(!empty($item['attr']['size']))
                                Size: <span>{{$item['attr']['size']}}</span><br>
                                @endif
                                @if(!empty($item['attr']['color']))
                                Màu: <span>{{$item['attr']['v_color']}}</span>
                                @endif
                                </div>
                            </a>
                        </div>
                    </td>
                    <td style ="color: #e02027; font-size: 16px; font-weight: 700;"><?php echo number_format($item['price']) ?></td>
                    <td><div>{{$item['quantity']}}</div></td>
                    <td style ="color: #e02027; font-size: 16px; font-weight: 700; "><?php echo number_format($item['sub_total']) ?></td>
                    <td><a style = "margin-right: 6px;" href="/cart" class="btn btn-primary">Refresh</a><button class="btn btn-danger cart-item-delete-btn" data-cart-item-id = "{{$item['id']}}" >Xóa</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if(count($items) > 0)
        <div class="total-price" style = "margin-top: 24px;">
            <div class="w-25" style = "margin-left: auto;border-bottom: 1px solid #e62263">
                <h6><b>Tổng đơn hàng: </b> <span style ="color: #e02027; font-size: 18px; font-weight: 700; "><?php echo number_format($total_price) ?></span>đ</h6>
            </div>
        </div>
        <div class="cart-action" style = "margin-top: 24px;">
            <div class="cart-action-wrapper w-25" style = "margin-left:auto">
                <button class="btn btn-danger" style = "background-color: #e62263">Đặt hàng</button>
                <a class="btn btn-secondary" href="/">Tiếp tục mua sắm</a>
            </div>
        </div>
        @else
        <div>
            <h6 style = "margin:auto; width: 50%; text-align:center; padding: 12px 0px;">Chưa có sản phẩm nào trong giỏ hàng!</h6>
            <a class="btn btn-secondary" style = "width: 20%;background-color: #e62263;border:none; display: block;margin:auto" href="/">Về trang chủ</a>
        </div>
        @endif

    </div>
</form>