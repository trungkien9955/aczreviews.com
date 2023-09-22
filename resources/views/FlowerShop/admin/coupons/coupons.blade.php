<?php use App\Models\FlowerShop\Section; ?>
@extends('FlowerShop.admin.layout.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Coupons</h4>
                  <a style = "max-width: 150px; float: right; display: inline-block;"href="{{url('admin/add-edit-coupons')}}" class="btn btn-block btn-primary">Thêm coupon</a>
                  @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                      <strong>Success:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                  <div class="table-responsive pt-3">
                    <table id = "coupons"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                            Mã coupon
                          </th>
                          <th>
                           Loại coupon
                          </th>
                          <th>
                            Số tiền (%)
                          </th>
                          <th>
                            Ngày hết hạn
                          </th>
                          <th>
                            Tình trạng
                          </th>
                          <th>
                            Thao tác
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($coupons as $coupon)
                        <tr>
                          <td>
                            {{$coupon['id']}}
                          </td>
                          <td>
                          {{$coupon['coupon_code']}}
                          </td>
                          <td>
                          {{$coupon['coupon_type']}}
                          </td>
                          <td>
                          {{$coupon['amount']}}
                          </td>    
                          <td>
                          {{$coupon['expiry_date']}}
                          </td>
                          <td> 
                          @if($coupon['status'] ==1)
                            <a href="" class="updateSectionStatus" id="coupon-{{$coupon['id']}}" coupon_id = "{{$coupon['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-check" status = "Active"></i></a>
                            @else
                            <a href="" class="updateSectionStatus" id="coupon-{{$coupon['id']}}" coupon_id = "{{$coupon['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-outline" status = "Inactive"></i></a>
                          @endif 
                          </td>                    
                          <td>
                          <a href="{{url('admin/add-edit-coupons/'.$coupon['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-pencil-box "></i></a>   
                          <a href = "javascript:void(0)"title = "coupon" class = "confirmDelete" module = "coupon" moduleid = "{{$coupon['id']}}"href="{{url('admin/delete-coupons/'.$coupon['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-file-excel-box"></i></a>          
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