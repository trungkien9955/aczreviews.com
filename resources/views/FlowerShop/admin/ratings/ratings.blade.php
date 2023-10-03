<?php use App\Models\FlowerShop\Section; ?>
@extends('FlowerShop.admin.layout.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Đánh giá sản phẩm</h4>
                  <a style = "max-width: 150px; float: right; display: inline-block;"href="{{url('admin/export-subscribers')}}" class="btn btn-block btn-primary">Export subscribers</a>
                  @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                      <strong>Success:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                  <div class="table-responsive pt-3">
                    <table id = "subscribers"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                            Email người dùng
                          </th>
                          <th>
                            Tên sản phẩm
                          </th>
                          <th>
                            Đánh giá
                          </th>
                          <th>
                            Điểm đánh giá
                          </th>
                          <th>
                            Thao tác
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($ratings as $rating)
                        <tr>
                          <td>
                            {{$rating['id']}}
                          </td>
                          <td>
                          {{$rating['user']['email']}}
                          </td>
                          <td>
                          {{$rating['product']['product_name']}}
                          </td>
                          <td>
                          {{$rating['review']}}
                          </td>
                          <td>
                          {{$rating['rating']}}
                          </td>
                          <td> 
                          @if($rating['status'] ==1)
                            <a href="" class="updateSectionStatus" id="rating-{{$rating['id']}}" rating_id = "{{$rating['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-check" status = "Active"></i></a>
                            @else
                            <a href="" class="updateSectionStatus" id="rating-{{$rating['id']}}" rating_id = "{{$rating['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-outline" status = "Inactive"></i></a>
                          @endif 
                          </td>                    
                          <td>
                          <a href="{{url('admin/add-edit-ratings/'.$rating['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-pencil-box "></i></a>   
                          <a href = "javascript:void(0)"title = "rating" class = "confirmDelete" module = "rating" moduleid = "{{$rating['id']}}"href="{{url('admin/delete-ratings/'.$rating['id'])}}">
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