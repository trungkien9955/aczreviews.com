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
                    <form class="forms-sample" @if(empty($filter['id'])) action = "{{url('admin/add-edit-filters')}}"@else action = "{{url('admin/add-edit-filters/'.$filter['id'])}}" @endif method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data">@csrf
                        <div class="form-group">
                        <label for="section_ids">Select Section</label>
                        <select name="section_ids[]" id="section_ids" class = "form-control" multiple = "" style = "height: 200px;">
                        <option value="Select">Select</option>
                        @foreach($sections as $section)
                            <option @if(!empty($filter['section_id'] == $filter['id'])) selected = "" @endif value="{{$section['id']}}">&nbsp;&nbsp;&nbsp;--&nbsp;{{$section['section_name']}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="filter_name">Filter Name</label>
                        <input type="text" class="form-control" id="filter_name" name = "filter_name" @if(!empty($filter['filter_name'])) value = "{{$filter['filter_name']}}" @else value = "{{old('filter_name')}}" @endif >
                        </div>
                        <div class="form-group">
                        <label for="filter_column">Filter Column</label>
                        <input type="text" class="form-control" id="filter_column" name = "filter_column" @if(!empty($filter['filter_column'])) value = "{{$filter['filter_column']}}" @else value = "{{old('filter_column')}}" @endif >
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