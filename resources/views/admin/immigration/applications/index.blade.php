@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_all_job')}}">Immigrations</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Application</span></li>
          </ol>
        </nav>
    </div>
</div>
<h4>Applications</h4>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
	<div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Applications</h4>
	          <div id="example">
           			 <table id="category-table" class="table dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Offer</th>
                                    <th>Created</th>
                                    <th>Approved</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->seeker_name}}</td>
                                    <td>{{$item->seeker_email}}</td>
                                    @if($item->job_name)
                                    <td>{{$item->job_name->name}}</td>
                                    @else
                                    <td>Not found</td>
                                    @endif
                                     <td>{{$item->created_at->format('d F Y H:s')}}</td>
                                     @if($item->is_approved)
                                        <td><i class="mdi mdi-marker-check tbl-icon"></i></td>
                                        @else
                                        <td><i class="mdi mdi-window-close tbl-icon"></i></td>
                                        @endif
                                    <td>
                                        <a class="btn btn-primary table-btn" href="{{route('review_immigration_application', $item->id)}}"><i class="mdi mdi-eye"></i></a>
                                        <a class="btn btn-danger table-btn" href="{{route('deleted_immigration_application', $item->id)}}"><i class="mdi mdi-delete-forever"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Offer</th>
                                    <th>Created</th>
                                    <th>Approved</th>
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


        ActiveLeftSideMenuOnLoad(".immigration_nav ", 5);
    });
</script>

@endsection