<!doctype html>
<html lang="en">

<!-- Mirrored from veepixel.com/tf/html/jodice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 08:35:46 GMT -->
<head>
    <title>Home | Work4u</title>
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
<header class="header_01">

    <div class="header_main">
        <div class="header_menu">
            <div class="container">
                @include('partials.user_header_top')
            </div>
        </div>
        <div class="header_btm">
            <!-- <div class="bg-v" >
                <div class="bg-v-2 bg-b-r">
                </div>
            </div> -->
            <div class="container">
                <div class="banner_slider ">
                    <div class="">
                        <div class="row align-items-center">
                            <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200">
                                <h2>Find the most exciting<br> starup jobs</h2>
                                <p>We are work4u offering most exciting job...</p>
                                <a class="btn btn-primary" href="{{route('user_job_countries')}}">Browse Job
                                    <i class="material-icons">arrow_right_alt</i>
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="banner_form_cont">

                                    <div class="user_type">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="user_type_inner  user_type_seeker">
                                                    <a href="{{route('user_study_country')}}">
                                                        <div class="usertype_img">
                                                            <img alt="" src="{{asset('assets/images/usertype-2.png')}}">
                                                            <img alt="" class="usertype-addon"
                                                                 src="{{asset('assets/images/usertype-2-addon.png')}}">
                                                        </div>
                                                        <div>
                                                            <h3>I'm looking for study</h3>
                                                            <p>Browse study offer that you love</p>
                                                            <i class="fas fa-long-arrow-alt-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="user_type_inner user_type_post">
                                                    <a href="{{route('user_immigrationm_countries')}}">
                                                        <div class="usertype_img">
                                                            <img alt="" src="{{asset('assets/images/usertype-1.png')}}">
                                                            <img alt="" class="usertype-addon"
                                                                 src="{{asset('assets/images/usertype-1-addon.png')}}">
                                                        </div>
                                                        <div>
                                                            <h3>I'm looking for Immigration</h3>
                                                            <p>Browse immigration offer that you love</p>
                                                            <i class="fas fa-long-arrow-alt-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</header>


<main>
    @yield('content')
</main>


<!-- Footer Container
================================================== -->
@include('partials.user_footer')
