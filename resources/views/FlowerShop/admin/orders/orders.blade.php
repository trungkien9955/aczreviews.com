<?php use App\Models\FlowerShop\Section; ?>
@extends('FlowerShop.admin.layout.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Đơn đặt hàng</h4>
                  <a style = "max-width: 150px; float: right; display: inline-block;"href="{{url('admin/add-edit-orders')}}" class="btn btn-block btn-primary">Add Filter</a>
                  @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                      <strong>Success:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                  <div class="table-responsive pt-3">
                    <table id = "orders"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                            Mã đơn đặt hàng
                          </th>
                          <th>
                            Tên khách hàng
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Số điện thoại
                          </th>
                          <th>
                            Địa chỉ
                          </th>

                          <th>
                            Tổng giá thanh toán
                          </th>
                          <th>
                            Trạng thái đơn đặt hàng
                          </th>
                          <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($orders as $order)
                        <tr>
                          <td>
                            {{$order['id']}}
                          </td>
                          <td>
                          {{$order['order_code']}}
                          </td>
                          <td>
                          {{$order['name']}}
                          </td>
                          <td>
                          {{$order['email']}}
                          </td>
                          <td>
                          {{$order['mobile']}}
                          </td>
                          <td>
                          {{$order['address']}},&nbsp;{{$order['ward']}},&nbsp;{{$order['district']}},&nbsp;{{$order['province']}},&nbsp;
                          </td>
                          </td>
                          <td>
                          {{$order['total_price']}}
                          </td>
                          <td>
                          {{$order['order_status']}}
                          </td>
                          <td>
                          <a href="{{url('admin/add-edit-orders/'.$order['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-pencil-box "></i></a>   
                          <a href = "javascript:void(0)"title = "order" class = "confirmDelete" module = "order" moduleid = "{{$order['id']}}"href="{{url('order/delete-order/'.$order['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-file-excel-box"></i></a>     
                          <a href="{{url('admin/order-pdf/'.$order['id'])}}">PDF</a>       
                          </td>
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