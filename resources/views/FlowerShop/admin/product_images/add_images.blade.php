@extends('FlowerShop.admin.layout.layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Thêm hình ảnh sản phẩm</h4>
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
                      <strong>Thành công: </strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                    <form class="forms-sample"  action = "{{url('admin/add-images/'.$product_details['id'])}}"method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data">@csrf
                        <div class="form-group">
                        <label for="product_name">Tên sản phẩm:</label>
                        &nbsp; {{$product_details['product_name']}}
                        </div>
                        <div class="form-group">
                        <label for="product_code">Mã sản phẩm:</label>
                        &nbsp; {{$product_details['product_code']}}
                        </div>
                        <div class="form-group">
                        <label for="product_color">Màu:</label>
                        &nbsp; {{$product_details['product_color']}}
                        </div>
                        <div class="form-group">
                        <label for="product_price">Giá:</label>
                        &nbsp; {{$product_details['product_price']}}
                        </div>
                        <div class="form-group">
                        <label for="">Hình ảnh sản phẩm:</label><br>
                        @if(!empty($product_details['product_image']))
                          <img style = "width: 150px; height: 150px"src="{{url('FlowerShop/front/images-3/product_images/medium/'.$product_details['product_image'])}}" alt="">
                          @else
                          <img style = "width: 150px; height: 150px" src="{{url('FlowerShop/front/images-3/no-image.png')}}" alt="">
                          @endif
                        </div>
                        <h5  class = "mt-3">Thêm hình ảnh sản phẩm:</h5>
                        <div class="form-group">
                        <div class="field_wrapper">
                          <div>
                            <input type="file" name = "images[]" multiple = "" id = "images">
                          </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
                    </form>
                    <br><br><h4 class="card-title">Add Images</h4>
                      <form class="forms-sample"  action = "{{url('admin/edit-images/'.$product_details['id'])}}"method = "post" >@csrf
                      <table id = "products"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                             Image
                          </th>
                          <th>
                          Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($product_details['images'] as $image)
                        <tr>
                          <td>
                            {{$image['id']}}
                          </td>
                          <td>
                            {{$image['image']}}
                          <img style = "width: 150px; height: 150px" src="{{url('FlowerShop/front/images-3/product_images/medium/'.$image['image'])}}" alt="">
                          </td>               
                          <td>
                          @if($image['status'] ==1)
                            <a class = "updateImageStatus" id = "image-{{$image['id']}}" image_id = "{{$image['id']}}" href="javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-check" status = "Active"></i></a>
                              
                            @else
                            <a class = "updateImageStatus" id = "image-{{$image['id']}}" image_id = "{{$image['id']}}" href="javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-outline" status = "Inactive"></i></a>
                            @endif
                            <a href = "javascript:void(0)" class = "confirmDelete" module = "image" moduleid = "{{$image['id']}}">
                          <i style = "font-size:25px"class = "mdi mdi-file-excel-box"></i></a>         
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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