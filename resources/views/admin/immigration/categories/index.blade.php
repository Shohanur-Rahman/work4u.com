@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_immigrations_offer')}}">Immigrations</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Categories</span></li>
          </ol>
        </nav>
    </div>
</div>
<h4>Categories</h4>
<p class="my-3">This is Immigrations category list. You can create or update or delete categories from here. </p>
<a href="{{route('admin_immigrations_countries')}}" class="btn btn-primary mb-3">Add New Category</a>

<div class="row">
    <div class="col-md-4 col-sm-5 col-xs-12 mb-5">
      <div class="card">
      	@if($category == null || $category->id <= 0)
        <div class="card-body">
          <h4 class="card-title">New Category</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('admin_immigration_save_category') }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf
            <div class="form-group">
              <label for="txtName">Name</label>
              <input type="text" name="name" class="form-control" id="txtName" placeholder="Category Name" required="">
            </div>
            <button class="btn btn-danger mr-2" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
        @else
        <div class="card-body">
          <h4 class="card-title">Edit Category</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('admin_immigration_update_category', $category->id) }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf
            <div class="form-group">
              <label for="txtName">Name</label>
              <input type="text" name="name" class="form-control" id="txtName" placeholder="Category Name" required="" value="{{ $category->name }}">
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
	          <h4 class="card-title">Category List</h4>
	          <div id="example">
           			 <table id="category-table" class="table dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Job</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($categories as $country )
									<tr>
	                                    <td>{{$country->id}}</td>
	                                    <td>{{$country->name}}</td>
                                      <td></td>
	                                    <td>
	                                    	<a class="btn btn-primary table-btn" href="{{route('admin_immigration_category_edit', $country->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                            <a class="btn btn-danger table-btn" href="{{route('delete_imm_category', $country->id)}}"><i class="mdi mdi-delete-forever"></i></a>
	                                    </td>
	                                </tr>
                            	@endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Job</th>
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

          ActiveLeftSideMenuOnLoad(".immigration_nav ", 2);
    });
</script>

@endsection