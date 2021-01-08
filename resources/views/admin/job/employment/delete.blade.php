@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
         <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_all_job')}}">Jobs</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_job_employment')}}">Employment Status</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Delete</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Delete Employment Status</h4>
            <p class="text-danger my-3">If you delete a Employment Status you cann't recover it from server also delete all related job offers. Please confirm PIN "<strong>{{$randomText}}</strong>" to Delete. </p>
            <form class="forms-sample" method="POST" action="{{ route('delete_job_employment_status_post', $data->id) }}" enctype="multipart/form-data" data-parsley-validate>
              @csrf
                <input type="hidden" value="{{$randomText}}" id="hdnDeletePIN" />
                <input type="hidden" value="{{$data->id}}" name="id" />
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="form-group row">
                        <input class="form-control" data-parsley-equalto="#hdnDeletePIN" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <input type="submit" class="btn btn-danger" value="Delete" />
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        ActiveLeftSideMenuOnLoad(".job_nav ", 2);
    });
  </script>

@endsection