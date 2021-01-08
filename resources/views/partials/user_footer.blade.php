<?php 
$wkSettings = App\WebSiteSettings::first();
?>

<footer id="colophon" class="site-footer custom_footer dark_footer">
	<div class="container">
		<div class="row footer_widget">
				<div class="col-md-4">
					<div class="footer_widget_box">
						<h2 data-aos="fade-up" data-aos-delay="400">Quick Links</h2>
						<ul data-aos="fade-in" data-aos-delay="200">
							<li>
								<a href="/" title="Home">Home</a>
							</li>
							<li>
								<a href="{{route('faq_page')}}" title="FAQs">FAQs</a>
							</li>
							<li>
								<a href="{{route('privacy_policy_page')}}" title="Privacy Policy">Privacy Policy</a>
							</li>
							<li>
								<a href="{{route('terms_condition_page')}}" title="Terms & Conditions">Terms & Conditions</a>
							</li>
							
							<li>
								<a href="{{$wkSettings ? $wkSettings->facebook_link : '#'}}" target="_blank" title="Facebook">Facebook</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer_widget_box">
						<h2 data-aos="fade-up" data-aos-delay="400">Importants</h2>
						<ul data-aos="fade-in" data-aos-delay="200">
							<li>
					<a href="{{ route('user_study_country') }}" title="Study">Study</a>
				</li>
				<li>
					<a href="{{ route('user_job_countries') }}" title="Job">Jobs</a>
				</li>
				<li>
					<a href="{{ route('user_immigrationm_countries') }}" title="Immigrations">Immigrations</a>
				</li>
				<li>
					<a href="{{ route('about_us_page') }}" title="About Us">About Us</a>
				</li>
				<li>
					<a href="{{ route('contact_page') }}" title="Contact Us">Contact Us</a>
				</li>
				<li>
					@if (Route::has('login'))
					@auth
					<a href="{{ route('dashboard')}}" title="Login">Dashboard</a>
					 @else
					 <a href="{{ route('login') }}" title="Login">Login</a>
					 @endauth
					 @endif
				</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer_widget_box">
						<h2 data-aos="fade-up" data-aos-delay="400">Community</h2>
						<ul data-aos="fade-in" data-aos-delay="200">
							<li>
                <i class="far fa-address-card"></i> &nbsp; {{$wkSettings ? $wkSettings->company_address:''}}
              </li> 
              <li>
                <i class="fas fa-mobile-alt"></i> &nbsp; {{$wkSettings ? $wkSettings->mobile_number :''}}
              </li>   
              <li>
                <i class="fas fa-envelope-open-text"></i> &nbsp; {{$wkSettings ?$wkSettings->company_email : ''}}
              </li>
              <li>
                <i class="far fa-clock"></i> &nbsp; {{$wkSettings ?$wkSettings->office_time: ''}}
              </li> 
              <li>
                <i class="fab fa-facebook-messenger"></i> &nbsp; <a href="{{$wkSettings ?$wkSettings->facebook_link : '#'}}" target="_blank">Facebook</a>
              </li>  
						</ul>
						
					</div>
				</div>
				<div class="col-md-12">
					<div class="footer_widget_box"  >
						<p class="copyright-text">© Copyright {{ now()->year }} by <a href="https://www.ajantasoft.com" target="_blank" class="footer_hover">AjantaSoft</a>. All rights reserved.
						</p>
					</div>
				</div>
			</div>
		<!-- .site-info -->
	</div>
</footer>


<!-- End Footer Container
================================================== -->


<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>