@extends('FlowerShop.admin.layout.layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">{{$title}}</h4>
                    @if($errors->any())
                    <div class = "alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                      <strong>Success:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                    <form class="forms-sample" @if(empty($filter['id'])) action = "{{url('admin/add-edit-coupons')}}"@else action = "{{url('admin/add-edit-coupons/'.$coupon['id'])}}" @endif method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data">@csrf
                        @if(empty($coupon['coupon_code']))
                        <div class="form-group">
                        <label for="coupon_option">Tùy chọn Coupon</label>
                        <span><input type="radio" id = "automatic_coupon" name = "coupon_option" value = "Automatic" checked>Tự động</span><input  type="radio" id = "manual_coupon" name = "coupon_option" value = "Manual">Thủ công
                        </div>
                        <div class="form-group" style = "display:none" id="coupon_field">
                        <label for="coupon_code">Mã coupon</label>
                        <input type="text" class="form-control" id="filter_name" name = "coupon_code">
                        </div>
                        @else
                        <input type="hidden" name = "coupon_option" value = "{{$coupon['coupon_option']}}" checked>
                        <div class="form-group" >
                        <input type="hidden" class="form-control" id="coupon_code" name = "coupon_code" value = "{{$coupon['coupon_code']}}">
                        <h6>Mã coupon: <span>{{$coupon['coupon_code']}}</span></h6>
                        </div>
                        @endif
                        <div class="form-group">
                        <label for="coupon_type">Loại Coupon</label>
                        <span><input type="radio"  name = "coupon_type" value = "Multiple Times" @if(isset($coupon['coupon_type']) && $coupon['coupon_type'] == "Multiple Times") checked @endif>Multiple Times</span><input  type="radio" id = "manual_coupon" name = "coupon_type" value = "Single Time" @if(isset($coupon['coupon_type']) && $coupon['coupon_type'] == "Single") checked @endif>Single Time
                        </div>
                        <div class="form-group">
                        <label for="amount_type">Đơn vị</label>
                        <span><input type="radio"  name = "amount_type" value = "Percentage" @if(isset($coupon['amount_type']) && $coupon['amount_type'] == "Percentage") checked @endif>%</span><input  type="radio"  name = "amount_type" value = "fixed" @if(isset($coupon['amount_type']) && $coupon['amount_type'] == "fixed") checked @endif>Cố định
                        </div>
                        <div class="form-group">
                        <label for="amount">Giá trị</label>
                        <input type="text" class="form-control" id="amount" name = "amount" @if(isset($coupon['amount']) value="{{$coupon['amount']}}" @else value = "{{old('amount')}}" @endif>
                        </div>
                        <div class="form-group">
                        <label for="section_id[]">Chọn section</label>
                        <select name="section_id[]" id="section_id" class = "form-control" multiple>
                        @foreach($sections as $section)
                        <option value="{{$section['id']}}" @if(in_array($section['id'], $section_id_collection)) selected @endif>{{$section['section_name']}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="admin_id[]">Chọn người dùng</label>
                        <select name="admin_id[]" id="admin_id" class = "form-control" multiple>
                        @foreach($admins as $admin)
                        <option value="{{$admin['id']}}"  @if(in_array($admin['id'], $user_id_collection)) selected @endif>{{$admin['name']}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="expiry_date">Ngày hết hạn</label>
                        <input type="date" class="form-control" id="expiry_date" name = "expiry_date" @if(isset($coupon['expiry_date'])) value = "{{$coupon['expiry_date']}}" @endif>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>      <!-- main-panel ends -->
    @endsection