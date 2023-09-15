@extends('FlowerShop.admin.layout.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách sản phẩm</h4>
                  <p class="card-description">
                    Trang thông tin sản phẩm.
                  </p>
                  <a style = "max-width: 150px; float: right; display: inline-block;"href="{{url('admin/add-edit-product')}}" class="btn btn-block btn-primary">Add Product</a>
                  @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                      <strong>Success:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                  <div class="table-responsive pt-3">
                    <table id = "products"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                            Product name
                          </th>
                          <th>
                            Product Code
                          </th>
                          <th>
                          Product Color
                          </th>
                          <th>
                          Product Image
                          </th>
                          <th>
                          Product Video
                          </th>
                          <th>
                          Section
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                        <tr>
                          <td>
                            {{$product['id']}}
                          </td>
                          <td>
                          {{$product['product_name']}}
                          </td>
                          <td>
                          {{$product['product_code']}}
                          </td>
                          <td>
                          {{$product['product_color']}}
                          </td>
                          <td>
                          @if(!empty($product['product_image']))
                          <img style = "width: 150px; height: 150px"src="{{asset('FlowerShop/front/images-3/product_images/small/'.$product['product_image'])}}" alt="">
                          @else
                          <img style = "width: 150px; height: 150px" src="{{asset('front/images/product_images/small/no-image.png')}}" alt="">
                          @endif
                          </td>
                          <td>
                          @if(!empty($product['product_video']))
                          <video style = "width: 150px; height: 150px"src="{{asset('front/videos/product_videos/'.$product['product_video'])}}" alt="">
                          @else
                          <img style = "width: 150px; height: 150px" src="{{asset('front/images/product_images/small/no-image.png')}}" alt="">
                          @endif
                          </td>
                          <td>
                          {{$product['section']['section_name']}}
                          </td>
                          <td>
                            @if($product['status'] ==1)
                            <a href="" class="updateSectionStatus" id="product-{{$product['id']}}" category_id = "{{$product['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-check" status = "Active"></i></a>
                            @else
                            <a href="" class="updateSectionStatus" id="product-{{$product['id']}}" category_id = "{{$product['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-outline" status = "Inactive"></i></a>
                          </td>
                          @endif                          
                          <td>
                          <a href="{{url('/admin/add-edit-products/'.$product['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-pencil-box "></i></a>   
                          <a href="{{url('admin/add-edit-attributes/'.$product['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-plus-box "></i></a>  
                          <a href="{{url('admin/add-images/'.$product['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-library-plus "></i></a>  
                          <a href = "javascript:void(0)"title = "product" class = "confirmDelete" module = "product" moduleid = "{{$product['id']}}"href="{{url('admin/delete-product/'.$product['id'])}}">
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