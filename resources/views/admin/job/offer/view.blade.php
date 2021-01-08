@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_study_offer')}}">Study</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>View Offer</span></li>
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
                	<h4 class="job-details-header">Financial requirements for Study</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->financial_requirement)!!}
	                </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">Documents required for Application</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->documents_required)!!}
	                </div>
                </div>
            </div>

            @if($offer->extra_title1 && $offer->extra_details1)
			<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">{{$offer->extra_title1}}</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->extra_details1)!!}
	                </div>
                </div>
            </div>
            @endif

            @if($offer->extra_title1 && $offer->extra_details1)
			<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">{{$offer->extra_title1}}</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->extra_details1)!!}
	                </div>
                </div>
            </div>
            @endif

            @if($offer->extra_title2 && $offer->extra_document2)
			<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">{{$offer->extra_title2}}</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->extra_document2)!!}
	                </div>
                </div>
            </div>
            @endif

            @if($offer->extra_title3 && $offer->extra_document3)
			<div class="row my-3">
                <div class="col">
                	<h4 class="job-details-header">{{$offer->extra_title3}}</h4>
	                <div class="job-details-content">
	                    {!!html_entity_decode($offer->extra_document3)!!}
	                </div>
                </div>
            </div>
            @endif

			<div class="row my-3">
                <div class="col">
                	<a class="btn btn-danger mr-2" href="{{route('admin_study_offer')}}"> Back</a>
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