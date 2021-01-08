@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_immigrations_offer')}}">Immigrations</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>View Immigration</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
      	<div class="card-header">
      		<h3 class="card-title">View Offer</h3>
      	</div>
        <div class="card-body">
        	<div class="row">
        		<div class="col">
          			<h4><i class="mdi mdi-home-map-marker"></i> {{$offer->country->name}}</h4>
        		</div>	
        	</div>
        	<div class="row my-3">
        		<div class="col">
          			<h4><i class="mdi mdi mdi-format-title"></i> {{$offer->name}}</h4>
        		</div>	
        	</div>
        	<div class="row">
        		<div class="col">
          			<h5><i class="mdi mdi mdi-format-title"></i> {{$offer->summary}}</h5>
        		</div>	
        	</div>
            <div class="row">
                <div class="col">
                    <h5><i class="mdi mdi-email-open"></i> {{$offer->submit_email}}</h5>
                </div>  
            </div>

        	<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">Educational requirements for admission</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->educational_requirment)!!}
	                </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">IELTS requirements</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->ielts_requirment)!!}
	                </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">Apply Instructions</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->apply_instruction)!!}
	                </div>
                </div>
            </div>

            @if($offer->extra_title1 && $offer->extra_description1)
			<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">{{$offer->extra_title1}}</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->extra_description1)!!}
	                </div>
                </div>
            </div>
            @endif

            @if($offer->extra_title2 && $offer->extra_description2)
			<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">{{$offer->extra_title2}}</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->extra_description2)!!}
	                </div>
                </div>
            </div>
            @endif

            @if($offer->extra_title3 && $offer->extra_description3)
			<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">{{$offer->extra_title3}}</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->extra_description3)!!}
	                </div>
                </div>
            </div>
            @endif


			<div class="row my-3">
                <div class="col">
                	<a class="btn btn-danger mr-2" href="{{route('admin_immigrations_offer')}}"> Back</a>
                </div>
            </div>
      	</div>
  	</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        ActiveLeftSideMenuOnLoad(".study_nav ", 2);
    });
</script>

@endsection