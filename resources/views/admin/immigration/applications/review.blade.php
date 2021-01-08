@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_all_job')}}">Immigrations</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_immigration_seeker_application')}}">Applications</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Review</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card mb-5">
      <div class="card">
      	<div class="card-header">
      		<h2 class="text-success">Application Information</h2>
      	</div>
        <div class="card-body">
          @if($application->job_name)
          <h4 class="card-title my-3">Offer : {{$application->job_name->name}}</h4>
          @else
          <h4 class="card-title my-3">Offer : Not found</h4>
          @endif
          <h4 class="card-title">Name : {{$application->seeker_name}}</h4>
          <h4 class="card-title my-3">Email : {{$application->seeker_email}}</h4>
          <h4 class="card-title">Subject : {{$application->application_subject}}</h4>
          <h4 class="card-title my-3">Date : {{$application->created_at->format('d F Y')}}</h4>
          
          <a class="btn btn-primary mb-3" style="color: #fff;" href="{{asset($application->cv_url)}}" target="_blank">View CV </a>

          <div class="my-5">
          	{!!html_entity_decode($application->application_message)!!}
          </div>

          <form class="forms-sample" method="POST" action="{{ route('approve_immigration_application',$application->id) }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf

	      		<div class="form-group">
	              <label class="w-100">Is Aprove</label>
	              <label class="toggle-switch toggle-switch-success">
	                <input type="checkbox" name="is_approved" {{ $application->is_approved ? 'checked="checked"' : '' }}>
	                <span class="toggle-slider round"></span>
	              </label>  
	            </div>


	            <button type="submit" class="btn btn-success">Aprove Application & Send Mail?</button>

          </form>

          </div>
      </div>
  </div>
</div>

  <script type="text/javascript">
    $(document).ready(function(){
       ActiveLeftSideMenuOnLoad(".immigration_nav ", 5);
    });
  </script>
@endsection