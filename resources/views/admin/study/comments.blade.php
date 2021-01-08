@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_study_offer')}}">Study</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Comments</span></li>
          </ol>
        </nav>
    </div>
</div>
<h4>Comments</h4>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
	<div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Comment List</h4>
	          <div id="example">
           			 <table id="category-table" class="table dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Email</th>
                                    <th>Offer</th>
                                    <th>Country</th>
                                    <th>Created</th>
                                    <th>Approved</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($comments as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->auth_name}}</td>
                                    <td>{{$item->auth_email}}</td>
                                    @if($item->offer)
                                    <td>{{$item->offer->name}}</td>
                                    @else
                                    <td>Not Found</td>
                                    @endif
                                    @if($item->offer)
                                    <td>{{$item->offer->country->name}}</td>
                                    @else
                                    <td>Not Found</td>
                                    @endif
                                    
                                     <td>{{$item->created_at->format('d F Y')}}</td>
                                     @if($item->is_approved)
                                        <td><i class="mdi mdi-marker-check tbl-icon"></i></td>
                                        @else
                                        <td><i class="mdi mdi-window-close tbl-icon"></i></td>
                                        @endif
                                    <td>
                                        <a class="btn btn-primary table-btn" href="{{route('edit_study_offer_comments', $item->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="btn btn-danger table-btn" href="{{route('delete_study_offer_comments', $item->id)}}"><i class="mdi mdi-delete-forever"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Summary</th>
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


        ActiveLeftSideMenuOnLoad(".study_nav ", 3);
    });
</script>

@endsection