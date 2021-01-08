<!doctype html>
<html lang="en">

<?php 
$wkSettings = App\WebSiteSettings::first();
?>

<!-- Mirrored from veepixel.com/tf/html/jodice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 08:35:46 GMT -->
<head>
  <title>About Us | Work4u</title>
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
			<img  alt="brand logo" src="assets/images/demologo-company.png">
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



<!-- Main 
================================================== -->
<main>
  <div class="single_job">
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<div class="row ">
		        <div class="col-md-12 single_job_main">
		        	<h2>Frequently Asked Questions and Answers</h2>
		        	
              <div id="accordion">

                @foreach($faqs as $faq)
                <div class="card faq-card">
                  <div class="card-header" id="heading_{{$faq->id}}">
                    <h5 class="mb-0">
                      <button class="accordion-link" data-toggle="collapse" data-target="#collapse_{{$faq->id}}" aria-expanded="true" aria-controls="collapse_{{$faq->id}}">
                        {{$faq->question}} <span class="accordian-right"><i class="fas fa-plus float-right"></i></span>
                      </button>
                    </h5>
                  </div>

                  <div id="collapse_{{$faq->id}}" class="collapse show" aria-labelledby="heading_{{$faq->id}}" data-parent="#accordion">
                    <div class="card-body">
                      {!!html_entity_decode($faq->answers)!!}
                    </div>
                  </div>
                </div>

                @endforeach


              </div>

		        </div>
		        <div class="section-divider"></div>
		        <div class="col-md-12 single_job_main">
		        	<h2>Location</h2>
		        	<iframe class="full-width-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d383.7702165181285!2d90.42280940784698!3d23.780942613429644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7e2bbdcfc6f%3A0xbcb983fa2d688723!2sWork4U%20Consultancy!5e0!3m2!1sen!2sbd!4v1570428752623!5m2!1sen!2sbd"  height="300" allowfullscreen=""></iframe>
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