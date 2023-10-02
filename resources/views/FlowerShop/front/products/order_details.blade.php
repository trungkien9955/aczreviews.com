@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="order-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="order-details-wrapper">
                    <div class="order-details-header">
                        <h3><b>Thông tin đơn đặt hàng</b></h3>
                        <p style = "margin:0;padding:0;font-size:10;"><b>Mã số: </b><span>{{$order_details['order_code']}}</span></p>
                        <p style = "margin:0;padding:0;font-size:10;"><b>Ngày:</b> <span>{{$order_details['created_at']}}</span></p>
                        <p style = "margin:0;padding:0;font-size:10;"><b>Trạng thái:</b> <span style = "color:#0d6efd;">{{$status}}</span></p>
                    </div>
                    <div class="order-details-content">
                        <div class="order-customer-info">
                            <h6><b>Thông tin khách hàng:</b></h6>
                            <div class="d-flex justify-content-between flex-wrap">
                                <p><b>Tên khách hàng:&nbsp;</b><span>{{$order_details['name']}}</span></p>
                                <p><b>Điện thoại:&nbsp;</b><span>{{$order_details['mobile']}}</span></p>
                                <p><b>Email:&nbsp;</b><span>{{$order_details['email']}}</span></p>
                                <p><b>Địa chỉ:&nbsp;</b><span>{{$order_details['address']}},<span>&nbsp;{{$order_details['ward']}},</span><span>&nbsp;{{$order_details['district']}},</span><span>&nbsp;{{$order_details['province']}}.</span></p>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>
                                @foreach($items as $item)
                            <tr>
                                <td>{{$item['product']['product_name']}}
                                    @if(!empty($item['attr']['size']))
                                    ,&nbsp;Size: <span>{{$item['attr']['size']}}</span><br>
                                    @endif
                                    @if(!empty($item['attr']['color']))
                                    ,&nbsp;Màu: <span>{{$item['attr']['v_color']}}</span>
                                    @endif
                                </td>
                                <td>{{$item['product_quantity']}}</td>
                                <td><?php echo number_format($item['product_price']) ?></td>
                                <td><?php echo number_format($item['sub_total']) ?></td>
                            </tr>
                                @endforeach
                        </table>
                        <div class="order-info">
                            <p><b>Tổng sản phẩm:&nbsp;</b><span>{{$items_count}}</span></p>
                            <p><b>Mã coupon:&nbsp;</b><span>{{$order_details['coupon_code']}}</span></p>
                            <p><b>Hình thức thanh toán:&nbsp;</b><span>{{$payment_method}}</span></p>
                            <p><b>Tổng giá thanh toán:&nbsp;</b><span style = "color: #e02027;"><?php echo number_format($total_price) ?>đ</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection