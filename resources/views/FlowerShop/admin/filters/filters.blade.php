<?php use App\Models\FlowerShop\Section; ?>
@extends('FlowerShop.admin.layout.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Filters</h4>
                  <a style = "max-width: 150px; float: right; display: inline-block;"href="{{url('admin/add-edit-filters')}}" class="btn btn-block btn-primary">Add Filter</a>
                  @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                      <strong>Success:</strong>{{Session::get('success_message')}}
                    </div>
                    @endif
                  <div class="table-responsive pt-3">
                    <table id = "filters"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                            Filter Name
                          </th>
                          <th>
                            Filter Column
                          </th>
                          <th>
                            Category ID
                          </th>
                          <th>
                            Category Name
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
                        @foreach($filters as $filter)
                        <tr>
                          <td>
                            {{$filter['id']}}
                          </td>
                          <td>
                          {{$filter['filter_name']}}
                          </td>
                          <td>
                          {{$filter['filter_column']}}
                          </td>
                          <td>
                          {{$filter['section_ids']}}
                          </td>
                          <td>
                          <?php 
                          $section_ids = explode(",", $filter['section_ids']);
                          foreach($section_ids as $key=>$section_id) {
                            $section_name = Section::name($section_id);
                            echo  $section_name." ";
                          }
                          ?>
                          </td>
                          <td>
                            @if($filter['status'] ==1)
                            <a href="" class="updateFilterStatus" id="filter-{{$filter['id']}}" filter_id = "{{$filter['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-check" status = "Active"></i></a>
                            @else
                            <a href="" class="updateFilterStatus" id="filter-{{$filter['id']}}" filter_id = "{{$filter['id']}}" href = "javascript:void(0)"><i style = "font-size:25px"class = "mdi mdi-bookmark-outline" status = "Inactive"></i></a>
                          </td>
                          @endif                          
                          <td>
                          <a href="{{url('admin/add-edit-filters/'.$filter['id'])}}">
                          <i style = "font-size:25px"class = "mdi mdi-pencil-box "></i></a>   
                          <a href = "javascript:void(0)"title = "filter" class = "confirmDelete" module = "filter" moduleid = "{{$filter['id']}}"href="{{url('admin/delete-filter/'.$filter['id'])}}">
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