@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Study</span></li>
          </ol>
        </nav>
    </div>
</div>
<h4>Offeres</h4>
<p class="my-3">This is study offeres list. You can create or update or delete offeres from here. </p>
<a href="{{route('new_study_offer')}}" class="btn btn-primary mb-3">Add New Offer</a>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
	<div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Offer List</h4>
	          <div id="example">
           			 <table id="category-table" class="table dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Created</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($studyOffers as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->country->name}}</td>
                                     <td>{{$item->created_at->format('d F Y')}}</td>
                                     @if($item->is_published)
                                        <td><i class="mdi mdi-marker-check tbl-icon"></i></td>
                                        @else
                                        <td><i class="mdi mdi-window-close tbl-icon"></i></td>
                                        @endif
                                    <td>
  <a class="btn btn-primary table-btn" href="{{route('edit_study_offer', $item->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="btn btn-primary table-btn" href="{{route('admin_view_study_offer', $item->id)}}"><i class="mdi mdi-eye"></i></a>
                                        <a class="btn btn-primary table-btn" href="{{route('admin_copy_study_offer', $item->id)}}"><i class="mdi mdi-content-copy"></i></a>
                                        <a class="btn btn-danger table-btn" href="{{route('admin_delete_study_offer', $item->id)}}"><i class="mdi mdi-delete-forever"></i></a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Created</th>
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

        ActiveLeftSideMenuOnLoad(".study_nav ", 2);

        $("#grid").kendoGrid();
    });
</script>

@endsection