@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Immigration</span></li>
          </ol>
        </nav>
    </div>
</div>
<h4>All Immigrations</h4>
<p class="my-3">This is immigration list. You can create or update or delete immigration from here. </p>
<a href="{{route('admin_add_immigrations')}}" class="btn btn-primary mb-3">Add New Job</a>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
	<div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Job List</h4>
	          <div id="example">
           			 <table id="category-table" class="table dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Country</th>
                                    <th>Category</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($immigrations as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->age}}</td>
                                    <td>{{$item->country->name}}</td>
                                    <td>{{$item->category->name}}</td>
                                     @if($item->is_published)
                                        <td><i class="mdi mdi-marker-check tbl-icon"></i></td>
                                        @else
                                        <td><i class="mdi mdi-window-close tbl-icon"></i></td>
                                        @endif
                                    <td>
                                        <a class="btn btn-primary table-btn" href="{{route('admin_edit_immigration', $item->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="btn btn-primary table-btn" href="{{route('view_immigration', $item->id)}}"><i class="mdi mdi-eye"></i></a>
                                        <a class="btn btn-primary table-btn" href="{{route('admin_copy_immigration', $item->id)}}"><i class="mdi mdi-content-copy"></i></a>
                                        <a class="btn btn-danger table-btn" href="{{route('delete_immigration_offer',$item->id)}}"><i class="mdi mdi-delete-forever"></i></a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                    <th>Country</th>
                                    <th>Category</th>
                                    <th>Published</th>
                                    <th>Action</th>
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

        ActiveLeftSideMenuOnLoad(".immigration_nav ", 3);
    });
</script>

@endsection