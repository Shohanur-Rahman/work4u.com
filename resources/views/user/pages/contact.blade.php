<!doctype html>
<html lang="en">

<?php 
$wkSettings = App\WebSiteSettings::first();
?>

<head>
  <title>Contact Us | Work4u</title>
@include('partials.user_header_resourse')
</head>
<body>

<header class="header_01 header_inner">
  <div class="header_main header_job_single_main">
    <div class="header_menu fixed-top">
      <div class="container">
        @include('partials.user_header_top')
      </div>
    </div>
    <div class="header_btm header_job_single">
	<div class="header_job_single_inner container">
		<div class="poster_company">
			<img  alt="brand logo" src="{{asset('admin/img/logo.png')}}">
		</div> 
		<div class="poster_details">
			<h2>Work4U Consultancy Ltd <span class="varified"><i class="fas fa-check"></i>Verified</span></h2>
			<h5>About company</h5>
			<ul>
				<li>
          <div class="staff_rating">
            <span>4.9</span>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </li>
				<li>
						<i class="fas fa-map-marker-alt"></i>
						{{$wkSettings ? $wkSettings -> company_address : ''}}
				</li>
				
			</ul>		
		</div>
		
	</div>
    	
    </div>
  </div> 
</header>


<!-- End Header 02
================================================== -->

<div class="map-area">
<iframe class="full-width-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d383.7702165181285!2d90.42280940784698!3d23.780942613429644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7e2bbdcfc6f%3A0xbcb983fa2d688723!2sWork4U%20Consultancy!5e0!3m2!1sen!2sbd!4v1570428752623!5m2!1sen!2sbd"  height="300" allowfullscreen=""></iframe>
</div>


<!-- Main 
================================================== -->
<main>
  <div class="single_job">
    <div class="container">
      @if(session()->get("message"))
  <div class="row mt-5">
      <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session()->get("message")}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      </div>
    </div>
    @endif

      <div class="row">
        <div class="col-md-7">
          
            <form class="forms-sample" method="POST" action="{{route('send_contact_message')}}" enctype="multipart/form-data" data-parsley-validate>
              <div class="row">
            @csrf
            <div class="col-sm-6">
              <div class="form-group">
              <label for="txtName">Name</label>
              <input type="text" class="form-control" name="name" id="txtName" aria-describedby="emailHelp" placeholder="Name" required="required">
            </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
              <label for="txtEmail">Email</label>
              <input type="email" class="form-control" id="txtEmail" name="email" placeholder="Email" required="required">
            </div>
          </div>
            <div class="col-sm-6">
              <div class="form-group">
              <label for="txtMobil">Mobile</label>
              <input type="text" class="form-control" id="txtMobil" name="mobile" placeholder="Mobile" required="required">
            </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
              <label for="txtSubject">Subject</label>
              <input type="text" class="form-control" id="txtSubject" name="subject" placeholder="Subject" required="required">
            </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group">
              <label for="comment">Message</label>
              <textarea class="form-control" id="comment" rows="3" name="message" required="required"></textarea>
            </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required="required" data-parsley-error-message="Check everything is done">
              <label class="form-check-label" for="exampleCheck1">Everything Done</label>
            </div>
            </div>
            <div class="col-sm-6">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </form>
          
        </div>
        <div class="col-md-1"></div>
      	<div class="col-md-4">
      		<div class="row ">
		        <div class="col-md-12 single_job_main">
		        	<h2>Contact Us</h2>
		        	<ul class="custom-list">
             
              <li>
                <i class="far fa-address-card"></i> &nbsp; {{$wkSettings ? $wkSettings->company_address : ''}}
              </li> 
              <li>
                <i class="fas fa-mobile-alt"></i> &nbsp; {{$wkSettings ? $wkSettings->mobile_number : ''}}
              </li>   
              <li>
                <i class="fas fa-envelope-open-text"></i> &nbsp; {{$wkSettings ? $wkSettings->company_email : ''}}
              </li>
              <li>
                <i class="far fa-clock"></i> &nbsp; {{$wkSettings ? $wkSettings->office_time : ''}}
              </li> 
              <li>
                <i class="fab fa-facebook-messenger"></i> &nbsp; <a href="{{$wkSettings ? $wkSettings->facebook_link : ''}}" target="_blank">Facebook</a>
              </li>   
              </ul>
		        </div>
		        
		      </div>
      	</div>
      	
      </div>
    </div>
  </div>
</main>


<!-- Footer Container
================================================== -->
@include('partials.user_footer')