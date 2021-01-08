<!doctype html>
<html lang="en">

<!-- Mirrored from veepixel.com/tf/html/jodice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 08:35:46 GMT -->
<head>
@include('partials.user_header_resourse')
</head>
<body>
<!-- Header 01
================================================== -->
<?php
$wkSettings = App\WebSiteSettings::first();
?>
@if($wkSettings->important_news)
    <div class="top_header">
        <div class="row">
            <div class="col-md-12">
                <marquee behavior="scroll" direction="left" scrollamount="3">{{$wkSettings->important_news}}</marquee>
            </div>
        </div>
    </div>
@endif
<header class="header_01 header_inner">
	<div class="header_main">
		<div class="header_menu">
			<div class="container">
				@include('partials.user_header_top')
			</div>
		</div>
		<div class="header_btm">
	      <h2>@yield('title')</h2>
	    </div>
	</div>
</header>




<main>
	@yield('content')
</main>



<!-- Footer Container
================================================== -->
@include('partials.user_footer')


