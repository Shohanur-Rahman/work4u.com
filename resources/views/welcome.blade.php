@extends('layouts.home_layout')

@section('content')

    <div class="section light-section featured_section">
        <div class="bg-v">
            <div class="bg-v-1 bg-t-r">
            </div>
            <div class="bg-v-1 bg-b-l">
            </div>
        </div>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Jobs Offer</h2>
            <div class="row two_col featured_box_outer">
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <?php $jobCountries = App\JobCountries::all(); ?>

                        @foreach($jobCountries as $country)
                            <div class="col-sm-4">
                                <a href="{{route('user_job_offeres', ['countryname'=> $country->name,'id'=> $country ->id])}}">
                                    <div class="featured_box ">
                                        <div class="fb_image">
                                            @if($country->total_job!= null)
                                                <div class="counter" data-count="{{$country->total_job->count()}}">0
                                                </div>
                                            @else
                                                <div class="counter" data-count="0">0</div>
                                            @endif
                                        </div>
                                        <div class='fb_content'>
                                            <small class="ct-in mt-3">Jobs In</small>
                                            <h6 class="">
                                                {{$country->name}}
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                    <div class="hot-jobs">
                        <div class="marque-box">
                            <ul class="nav">
                                <marquee behavior="" direction="up" scrollamount="3" class="hot-jobs-marquee" onmouseover="this.stop();" onmouseleave="this.start();">
                                    @foreach($hotJobs as $job)
                                        <li class="marque-item"><a href="{{route('user_job_offeres_details', ['countryname'=> $job->country->name,'countryid'=> $job ->country_id,'id'=> $job ->id])}}">{{$job->name}}</a></li>
                                    @endforeach
                                </marquee>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="section dark-section featured_section">
        <div class="bg-v">
            <div class="bg-v-3 bg-t-r">
            </div>
            <div class="bg-v-3 bg-b-l">
            </div>
        </div>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Study Offer</h2>
            <div class="row two_col featured_box_outer">
                <?php $jobCountries = App\StudyCountry::all(); ?>

                @foreach($jobCountries as $country)
                    <div class="col-sm-3">
                        <a href="{{route('user_study_offeres', ['countryname'=> $country->name,'id'=> $country ->id])}}">
                            <div class="featured_box ">
                                <div class="fb_image">
                                    @if($country->total_job!= null)
                                        <div class="counter" data-count="{{$country->total_job->count()}}">0</div>
                                    @else
                                        <div class="counter" data-count="0">0</div>
                                    @endif
                                </div>
                                <div class='fb_content'>
                                    <small class="ct-in mt-3">Jobs In</small>
                                    <h6 class="">
                                        {{$country->name}}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="section light-section featured_section">
        <div class="bg-v">
            <div class="bg-v-1 bg-t-r">
            </div>
            <div class="bg-v-1 bg-b-l">
            </div>
        </div>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="400" class="section_h">Immigration Offer</h2>
            <div class="row two_col featured_box_outer">
                <?php $jobCountries = App\ImmigrationCountry::all(); ?>

                @foreach($jobCountries as $country)
                    <div class="col-sm-3">
                        <a href="{{route('user_immigration_offeres', ['countryname'=> $country->name,'id'=> $country ->id])}}">
                            <div class="featured_box ">
                                <div class="fb_image">
                                    @if($country->total_job!= null)
                                        <div class="counter" data-count="{{$country->total_job->count()}}">0</div>
                                    @else
                                        <div class="counter" data-count="0">0</div>
                                    @endif
                                </div>
                                <div class='fb_content'>
                                    <small class="ct-in mt-3">Jobs In</small>
                                    <h6 class="">
                                        {{$country->name}}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
