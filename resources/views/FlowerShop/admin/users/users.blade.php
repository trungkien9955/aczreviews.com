<?php use App\Models\FlowerShop\Section; ?>
@extends('FlowerShop.admin.layout.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Người dùng</h4>
                  <a style = "max-width: 150px; float: right; display: inline-block;"href="{{url('admin/export-subscribers')}}" class="btn btn-block btn-primary">Export subscribers</a>
                  @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                      <strong>Success:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                  <div class="table-responsive pt-3">
                    <table id = "users"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                            Tên người dùng
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Trạng thái
                          </th>
                          <th>
                            Thao tác
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>
                            {{$user['id']}}
                          </td>
                          <td>
                          {{$user['name']}}
                          </td>
                          <td>
                          {{$user['email']}}
                          </td>
                          <td> 
                          @if($user['status'] ==1)
                            <a href="" class="updateSectionStatus" id="user-{{$user['id']}}" user_id = "{{$user['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-check" status = "Active"></i></a>
                            @else
                            <a href="" class="updateSectionStatus" id="user-{{$user['id']}}" user_id = "{{$user['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-outline" status = "Inactive"></i></a>
                          @endif 
                          </td>                    
                          <td>
                          <a href="{{url('admin/add-edit-users/'.$user['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-pencil-box "></i></a>   
                          <a href = "javascript:void(0)"title = "user" class = "confirmDelete" module = "user" moduleid = "{{$user['id']}}"href="{{url('admin/delete-users/'.$user['id'])}}">
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