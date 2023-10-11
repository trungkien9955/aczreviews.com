@extends('FlowerShop.admin.layout.layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Thêm thuộc tính sản phẩm</h4>
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
                    <form class="forms-sample"  action = "{{url('admin/add-edit-attributes/'.$product_details['id'])}}"method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data">@csrf
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
                        @if(!empty($product_details['product_image']))
                          <img style = "width: 150px; height: 150px"src="{{asset('front/images/product_images/medium/'.$product_details['product_image'])}}" alt="">
                          @else
                          <img style = "width: 150px; height: 150px" src="{{url('FlowerShop/front/images-3/product_images/no-image.png')}}" alt="">
                          @endif
                        </div>
                        <div class="form-group">
                            <div class="field_wrapper">
                                <div>
                                    <input type="text" name="size[]" placeholder="Size"  style = "max-width: 240px;"/>
                                    <input type="text" name="sku[]" placeholder="SKU" required = "" style = "max-width: 240px;"/>
                                    <input type="text" name="color[]" placeholder="Màu"  style = "max-width: 240px;"/>
                                    <input type="text" name="price[]" placeholder="Giá" required = "" style = "max-width: 240px;"/>
                                    <input type="text" name="stock[]" placeholder="Trong kho" required = "" style = "max-width: 240px;"/><br>
                                    <label for="">Hình ảnh</label>
                                    <input type="file" name="image[]" placeholder="Image" style = "max-width: 240px;"/>
                                    <br>
                                    <a href="javascript:void(0);" class="add_button" title="Add attribute">Thêm</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
                    </form>
                    </div>
                </div>
                </div>
                <div class="table-responsive pt-3">
                    <table id = "attributes"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                            Size
                          </th>
                          <th>
                            SKU
                          </th>
                          <th>
                           Giá
                          </th>
                          <th>
                           Màu 
                          </th>
                          <th>
                           Hình ảnh
                          </th>
                          <th>
                            Trong kho
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($product_details['attributes'] as $attribute)
                        <tr>
                          <td>
                            {{$attribute['id']}}
                          </td>
                          <td>
                          {{$attribute['size']}}
                          </td>
                          <td>
                          {{$attribute['sku']}}
                          </td>
                          <td>
                          {{$attribute['price']}}
                          </td>
                          <td>
                          {{$attribute['color']}}
                          </td>
                          <td>
                          {{$attribute['image']}}
                          <img style = "width: 150px; height: 150px" src="{{url('FlowerShop/front/images-3/product_images/small/'.$attribute['image'])}}" alt="">
                          </td>
                          <td>
                          {{$attribute['stock']}}
                          </td>
                          <td>
                            @if($attribute['status'] ==1)
                            <a href="" class="updateAttributeStatus" id="attribute-{{$attribute['id']}}" attribute_id = "{{$attribute['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-check" status = "Active"></i></a>
                            @else
                            <a href="" class="updateAttributeStatus" id="attribute-{{$attribute['id']}}" attribute_id = "{{$attribute['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-outline" status = "Inactive"></i></a>
                          </td>
                          @endif                          
                          <td> 
                          <a href="{{url('admin/add-edit-attributes/'.$attribute['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-pencil-box "></i></a>   
                          <a href = "javascript:void(0)"title = "attribute" class = "confirmDelete" module = "attribute" moduleid = "{{$attribute['id']}}"href="{{url('admin/delete-attributes/'.$attribute['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-file-excel-box"></i></a>          
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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