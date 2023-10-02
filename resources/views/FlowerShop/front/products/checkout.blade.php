@extends('FlowerShop.front.layout.layout3')
@section('content')
<div class="checkout-section">
    <div class="container">
        <div class="checkout-wrapper" style = "padding-top: 24px;">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="customer-info-wrapper">
                        <div class="customer-info-header">
                            <h5><i class="fa-solid fa-location-dot"></i><b><span>Thông tin khách hàng</span></b></h5>
                        </div>
                        <form action="{{url('/place-order')}}" method = "post">@csrf
                            <div class="d-flex gx-2">
                                <div class="col">
                                    <label for="customer_name">Tên</label>
                                    <input type="text" class="form-control"  name = "name" id = "customer_name" required>
                                </div>
                                <div class="col">
                                    <label for="customer_mobile">Số điện thoại</label>
                                    <input type="text" class="form-control"  name = "mobile" id = "customer_mobile" required>
                                </div>
                                <div class="col">
                                    <label for="customer_email">Email</label>
                                    <input type="email" class="form-control"  name = "email" id = "customer_email" required>
                                </div>
                            </div>
                            <label for="">Địa chỉ</label>
                            <div class="d-flex gx-2 mt-2">
                                <div class="col">
                                    <select name="province_id" id="province" class = "form-control" required>
                                        <option value="">Tỉnh/Thành phố</option>
                                        @foreach($provinces as $province)
                                        <option value="{{$province['id']}}">{{$province['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="district_id" id="district" class = "form-control"required>
                                        <option value="">Quận/Huyện</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="ward_id" id="ward" class = "form-control"required >
                                        <option value="">Xã/Phường</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <input type="text" class="form-control"  name = "address" id = "address" placeholder = "Số nhà/Tên đường/Thôn/Xóm" required>
                            </div>
                            <div class="form-check-field mt-1" style = "border: 1px solid #ccc; padding: 6px 12px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="cod" id="payment_cod" name = "payment_method" required>
                                    <label class="form-check-label" for="cod">
                                        Thanh toán khi nhận hàng
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="transfer" id="payment_transfer" name = "payment_method">
                                    <label class="form-check-label" for="transfer">
                                       Chuyển khoản ngân hàng
                                    </label>
                                </div>
                            </div>
                            <div class="customer-options-field mt-1" style = "border: 1px solid #ccc; padding: 6px 12px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="vat_invoice" id="vat_invoice" name = "vat_invoice">
                                    <label class="form-check-label" for="cod" >
                                        Xuất hóa đơn VAT
                                    </label>
                                </div>
                                <div id="invoice-info">
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <input type="text" class="form-control"  name = "customer_note" id = "customer_note" placeholder = "Để lại lời nhắn cho FlowerShop (nếu có)">
                            </div>
                            <input type="hidden" name = "total_price" value = "{{$total_price}}">
                            <div class="customer-action" style = "margin-top: 24px;">
                                    <button type = "submit" class="btn btn-danger" style = "background-color: #e62263; padding: 12px 24px">Đặt hàng</button>
                            </div>
                        </form>
                        @if(Session::has('success_message'))
                        <div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert">
                        <strong>Thành công:</strong><?php echo Session::get('success_message'); ?>
                        </div>
                        @endif
                        @if(Session::has('error_message'))
                        <div class = "alert alert-danger alert-dismissible fade show mt-3" role = "alert">
                        <strong>Lỗi:</strong><?php echo Session::get('error_message'); ?>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="checkout-items-wrapper">
                        <div class="checkout-items-header">
                            <h5><i class="fa-solid fa-list"></i><b><span>Danh mục sản phẩm</span></b></h5>
                        </div>
                        <div class="checkout-items-container">
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
                                    <td>{{$item['quantity']}}</td>
                                    <td><?php echo number_format($item['price']) ?></td>
                                    <td><?php echo number_format($item['sub_total']) ?></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="checkout-total-price" style = "width: 50%;float:right;display:flex; justify-content:flex-end;padding: 0 12px;">
                            Tổng: &nbsp;<span style = "color: #e02027;"><?php echo number_format($total_price) ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection