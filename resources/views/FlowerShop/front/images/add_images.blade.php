@extends('admin.layout.layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Add Attributes</h4>
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
                    <form class="forms-sample"  action = "{{url('admin/add-images/'.$product['id'])}}"method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data">@csrf
                        <div class="form-group">
                        <label for="product_name">Product Name</label>
                        &nbsp; {{$product['product_name']}}
                        </div>
                        <div class="form-group">
                        <label for="product_code">Product Code</label>
                        &nbsp; {{$product['product_code']}}
                        </div>
                        <div class="form-group">
                        <label for="product_color">Product Color</label>
                        &nbsp; {{$product['product_color']}}
                        </div>
                        <div class="form-group">
                        <label for="product_price">Product Price</label>
                        &nbsp; {{$product['product_color']}}
                        </div>
                        <div class="form-group">
                        @if(!empty($product['product_image']))
                          <img style = "width: 150px; height: 150px"src="{{asset('front/images/product_images/small/'.$product['product_image'])}}" alt="">
                          @else
                          <img style = "width: 150px; height: 150px" src="{{asset('front/images/product_images/small/no-image.png')}}" alt="">
                          @endif
                        </div>
                        <div class="form-group">
                        <div class="field_wrapper">
                          <div>
                            <input type="file" name = "images[]" multiple = "" id = "images">
                          </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                    <br><br><h4 class="card-title">Add Images</h4>
                      <form class="forms-sample"  action = "{{url('admin/edit-images/'.$product['id'])}}"method = "post" >@csrf
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
                        @foreach($product['images'] as $image)
                        <tr>
                          <td>
                            {{$image['id']}}
                          </td>
                          <td>
                          <img style = "width: 150px; height: 150px"src="{{asset('front/images/product_images/small/'.$image['image'])}}" alt="">
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