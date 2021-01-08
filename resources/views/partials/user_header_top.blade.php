<div class="header_top">
	<div class="logo">
		<a href="/">
			<?php
				$wkSettings = App\WebSiteSettings::first();
				?>

				@if($wkSettings && $wkSettings->logo_url)
				<img  alt="Work4u" class="img-fluid" src="{{asset($wkSettings->logo_url)}}">

				@else
				 <img  alt="Work4u" class="img-fluid" src="{{asset('assets/images/logo.png')}}">
				@endif
		</a>
	</div>
	<div class="navigation">
		<nav>
			<div class="hamburger hamburger--spring js-hamburger ">
		        <div class="hamburger-box">
		          <div class="hamburger-inner"></div>
		        </div>
		      </div>
			<ul class="text-uppercase">
				<li>
					<a href="{{route('pages.index')}}" title="Home">Home</a>
				</li>
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
		</nav>
	</div>
</div>
