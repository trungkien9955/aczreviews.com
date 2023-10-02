<?php

namespace App\Http\Controllers\FlowerShop\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlowerShop\Order;
use App\Models\FlowerShop\Cart;

use Dompdf\Dompdf;
class OrderController extends Controller
{
    public function orders(){
        $orders = Order::get()->toArray();
        return view('FlowerShop.admin.orders.orders', compact('orders'));
    }
    public function view_pdf_order($id){
        $order_details = Order::find($id)->toArray();
        if(!empty($order_details['user_id'])){
            $order_details = Order::where(['session_id'=> $order_details['session_id'], 'user_id'=>$order_details['user_id']])->first();
        }else{
            $order_details = Order::where('session_id', Session::get('session_id'))->first();
        }
        $total_price = $order_details['total_price'];
        $items = Order::get_order_products($id);
        // dd($items);
        $items_count = 0;
        foreach( $items as $item){
            $count = $item['product_quantity'];
            $items_count = $items_count + $count;
        }
        $order_code = $order_details['order_code'];
        if( $order_details['order_status'] == "confirming"){
            $status = "Đang chờ xác nhận";
        }else if($order_details['order_status'] == "shipping"){
            $status = "Đang giao hàng";
        }else if($order_details['order_status'] == "completed"){
            $status = "Hoàn thành";
        }
        if( $order_details['payment_method'] == "cod"){
            $payment_method = "Thanh toán khi nhận hàng";
        }else if($order_details['payment_method'] == "transfer"){
            $payment_method = "Chuyển khoản ngân hàng";
        }
        $dompdf = new Dompdf();
        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Email</title>
            <style>
            *{ font-family: dejavu sans;}
          </style>
        </head>
        <body">
            <div style="width:75%;font-size:14px">
                <div class="order-details-wrapper">
                    <div class="order-details-header">
                        <h3><b>Thông tin đơn đặt hàng</b></h3>
                        <p style = "margin:0;padding:0;font-size:10;"><b>Mã số: </b><span>'.$order_details['order_code'].'</span></p>
                        <p style = "margin:0;padding:0;font-size:10;"><b>Ngày:</b> <span>'.$order_details['created_at'].'</span></p>
                        <p style = "margin:0;padding:0;font-size:10;"><b>Trạng thái:</b> <span style = "color:#0d6efd;">'.$status.'</span></p>
                    </div>
                    <div class="order-details-content">
                        <div class="order-customer-info">
                            <h4><b>Thông tin khách hàng:</b></h4>
                            <div class="d-flex justify-content-between flex-wrap">
                                <p><b>Tên khách hàng:&nbsp;</b><span>'.$order_details['name'].'</span></p>
                                <p><b>Điện thoại:&nbsp;</b><span>'.$order_details['mobile'].'</span></p>
                                <p><b>Email:&nbsp;</b><span>'.$order_details['email'].'</span></p>
                                <p><b>Địa chỉ:&nbsp;</b><span>'.$order_details['address'].',<span>&nbsp;'.$order_details['ward'].',</span><span>&nbsp;'.$order_details['district'].',</span><span>&nbsp;'.$order_details['province'].'.</span></p>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>';
                            foreach($items as $item){
                               $html.= 
                                '<tr>
                                    <td>'.$item['product']['product_name']
                                        .',&nbsp;Size: <span>'.$item['product_size'].'</span><br>'
                                        .',&nbsp;Màu: <span>'.$item['product_color'].'</span></td>
                                    <td>'.$item['product_quantity'].'</td>
                                    <td>'.  number_format($item['product_quantity']).'</td>
                                    <td>'.  number_format($item['sub_total']) .'</td>
                                </tr>';
                            }
                            $html.='</table>
                        <div class="order-info">
                            <p><b>Tổng sản phẩm:&nbsp;</b><span>'.$items_count.'</span></p>
                            <p><b>Mã coupon:&nbsp;</b><span>'.$order_details['coupon_code'].'</span></p>
                            <p><b>Hình thức thanh toán:&nbsp;</b><span>'.$payment_method.'</span></p>
                            <p><b>Phí giao hàng:&nbsp;</b><span>'.$order_details['shipping_charges'].'</span></p>
                            <p><b>Tổng giá thanh toán:&nbsp;</b><span style = "color: #e02027;"><'.number_format($total_price).'đ</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>';
        $dompdf->loadHtml($html);
// .echo number_format($total_price);
// foreach($items as $item){
//     echo 
//      '<tr>
//      <td>'.$item['product']['product_name'].
//          if(!empty($item['attr']['size'])){
//              echo ',&nbsp;Size: <span>'.$item['attr']['size'].'</span><br>';
//          }
//          if(!empty($item['attr']['color'])){
//              echo ',&nbsp;Màu: <span>'.$item['attr']['v_color'].'</span>';
//          }
//      }
//      .'</td>
//      <td>'.$item['quantity'].'</td>
//      <td>'. echo number_format($item['price']).'</td>
//      <td>'. echo number_format($item['sub_total']) .'</td>
//  </tr>';
//  }
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
