@extends('layouts.user_layout')
@section('title', 'Browse job offer in ' . $countryname)
@section('content')
<div class="job_container">
	<div class="container">
 <div class="row job_main">
        <div class="sidebar">
          
        <h5>Account</h5>
        <ul class="user_navigation">   
        @foreach($countries as $ct)
            <li>
              <a href="{{route('user_immigration_offeres', ['countryname'=> $ct->name,'id'=> $ct ->id])}}">{{$ct->name}}({{$ct->total_job->count()}})</a>
            </li>
            @endforeach
          
          </ul>
        </div>
        <div class=" job_main_right">
          <div class="jm_headings">
              <h5>Browse study in {{$countryname}}</h5>
          </div>
          <div class="row full_width featured_box_outer">

          	@foreach($jobOffers as $offer)
            <div class="col-sm-12">
              <div class="featured_box ">
                <div class="fb_image">
                  <img  alt="brand logo" src="{{asset('admin/img/logo.png')}}">
                </div>
                <div class="fb_content">
                  <h4><a href="{{route('user_immigration_offeres_details', ['countryname'=> $countryname,'countryid'=> $offer ->country_id,'id'=> $offer ->id])}}">{{$offer->name}}</a></h4>
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fas fa-landmark"></i>
                        {{$offer->country->name}}
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="far fa-clock"></i>
                        {{ Carbon\Carbon::parse($offer->created_at)->diffForHumans()}} 
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="fb_action">
                  <a class="btn btn-primary" href="{{route('user_immigration_offeres_details', ['countryname'=> $countryname,'countryid'=> $offer ->country_id,'id'=> $offer ->id])}}">More Details</a>
                </div>
              </div>
            </div>

            @endforeach
          </div>
        </div>
      </div>
    </div>
</div>

@endsection