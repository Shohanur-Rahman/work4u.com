@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_all_job')}}">Jobs</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Employment Status</span></li>
          </ol>
        </nav>
    </div>
</div>
<h4>Employment Status</h4>
<p class="my-3">This is job Employment list. You can create or update or delete Employment from here. </p>
<a href="{{route('admin_job_employment')}}" class="btn btn-primary mb-3">Add New Employment Status</a>

<div class="row">
    <div class="col-md-4 col-sm-5 col-xs-12 mb-5">
      <div class="card">
      	@if($country == null || $country->id <= 0)
        <div class="card-body">
          <h4 class="card-title">New Employment</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('admin_save_employment') }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf
            <div class="form-group">
              <label for="txtName">Name</label>
              <input type="text" name="name" class="form-control" id="txtName" placeholder="Name" required="">
            </div>
            <button class="btn btn-danger mr-2" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
        @else
        <div class="card-body">
          <h4 class="card-title">Edit Employment</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('admin_update_employment', $country->id) }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf
            <div class="form-group">
              <label for="txtName">Name</label>
              <input type="text" name="name" class="form-control" id="txtName" placeholder="Country Name" required="" value="{{ $country->name }}">
            </div>
            <button class="btn btn-danger mr-2" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Update</button>
          </form>
        </div>
        @endif
      </div>
    </div>

    <div class="col-md-8 col-sm-7 col-xs-12 grid-margin stretch-card">
	<div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Employment Status</h4>
	          <div id="example">
           			 <table id="category-table" class="table dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($countries as $country )
									<tr>
	                                    <td>{{$country->id}}</td>
	                                    <td>{{$country->name}}</td>
	                                    <td>
	                                    	<a class="btn btn-primary table-btn" href="{{route('admin_edit_employment', $country->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                            <a class="btn btn-danger table-btn" href="{{route('delete_job_employment_status', $country->id)}}"><i class="mdi mdi-delete-forever"></i></a>
	                                    </td>
	                                </tr>
                            	@endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
        </div>
	        </div>
	      </div>
    </div>
</div>

<script type="text/javascript">
	
	$(document).ready(function () {
        var successMessage = '{{ session()->get("message") }}';
        if ($.trim(successMessage) != "")
            showSwal('success-message', successMessage);

          ActiveLeftSideMenuOnLoad(".job_nav ", 2);
    });
</script>

@endsection