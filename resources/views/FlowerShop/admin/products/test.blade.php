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
                    <p class="card-description">
                        Basic form layout
                    </p>
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
                    <form class="forms-sample" @if(empty($product['id'])) action = "{{url('admin/add-edit-products')}}"@else action = "{{url('admin/add-edit-products/'.$product['id'])}}" @endif method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data">@csrf
                        <div class="form-group">
                        <label for="section_id">Select Category</label>
                        <select name="section_id" id="section_id" class = "form-control">
                        <option value="Select">Select</option>
                        @foreach($sections as $section)
                        <option @if(!empty($product['section_id'] == $section['id'])) selected = "" @endif value="{{$section['id']}}">&nbsp;&nbsp;&nbsp;--&nbsp;{{$section['section_name']}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="loadFilters">
                          @include('FlowerShop.admin.filters.category_filters')
                        </div>
                        <div class="form-group">
                        <label for="brand_id">Select Brand</label>
                        <select name="brand_id" id="brand_id" class = "form-control">
                        <option value="Select">Select</option>
                        @foreach($brands as $brand)
                        <option @if(!empty($product['brand_id'] == $brand['id'])) selected = "" @endif value="{{$brand['id']}}">{{$brand['name']}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name = "product_name" @if(!empty($product['product_name'])) value = "{{$product['product_name']}}" @else value = "{{old('product_name')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="product_code">Product Code</label>
                        <input type="text" class="form-control" id="product_code" name = "product_code" @if(!empty($product['product_code'])) value = "{{$product['product_code']}}" @else value = "{{old('product_code')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="product_color">Product Color</label>
                        <input type="text" class="form-control" id="product_color" name = "product_color" @if(!empty($product['product_color'])) value = "{{$product['product_color']}}" @else value = "{{old('product_color')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="product_price">Product Price</label>
                        <input type="text" class="form-control" id="product_price" name = "product_price" @if(!empty($product['product_price'])) value = "{{$product['product_price']}}" @else value = "{{old('product_price')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="product_discount">Product Discount</label>
                        <input type="text" class="form-control" id="product_discount" name = "product_discount" @if(!empty($product['product_discount'])) value = "{{$product['product_discount']}}" @else value = "{{old('product_discount')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="product_image">Product Image (Recommend size: 1000x1000)</label>
                        <input type="file" class="form-control" id="product_image" name = "product_image"  >
                        @if(!empty($product['product_image']))
                        <a href="{{url('front/images/product_images/large/'.$product['product_image'])}}">View image</a>
                        <a href = "javascript:void(0)" class = "confirmDelete" module = "product-image" moduleid = "{{$product['id']}}">Delete image</a>
                        @endif
                        </div>
                        <div class="form-group">
                        <label for="product_video">Product Video(Recommend size: Less then 2 MB)</label>
                        <input type="file" class="form-control" id="product_video" name = "product_video"  >
                        @if(!empty($product['product_video']))
                        <a href="{{url('front/videos/product_videos/'.$product['product_video'])}}">View video</a>
                        <a href = "javascript:void(0)" class = "confirmDelete" module = "product-video" moduleid = "{{$product['id']}}">Delete video</a>
                        @endif
                        </div>
                        <div class="form-group">
                        <label for="description">Product Description</label>
                          <textarea name="description" id="description"  rows="3" class = "form-control">{{$product['description']}}</textarea>
                        </div>
                        <div class="form-group">
                        <label for="url">Product URL</label>
                        <input type="text" class="form-control" id="url" name = "url" @if(!empty($product['url'])) value = "{{$product['url']}}" @else value = "{{old('url')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name = "meta_title" @if(!empty($product['meta_title'])) value = "{{$product['meta_title']}}" @else value = "{{old('meta_title')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <input type="text" class="form-control" id="meta_description" name = "meta_description" @if(!empty($product['meta_description'])) value = "{{$product['meta_description']}}" @else value = "{{old('meta_description')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <input type="text" class="form-control" id="url" name = "meta_keywords" @if(!empty($product['meta_keywords'])) value = "{{$product['meta_keywords']}}" @else value = "{{old('meta_keywords')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="is_featured">Featured Items</label>
                        <input type="checkbox" name = "is_featured" id = "is_featured" value = "Yes" @if(!empty($product['is_featured']) && $product['is_featured'] == 'Yes') checked @endif>
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