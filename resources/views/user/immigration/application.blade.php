@extends('layouts.user_layout') @section('title', $offer->name) @section('content')

<div class="single_job">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row offer-details-row">
                    <form class="full-width-form" method="POST" action="{{ route('immigration_send_application') }}" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <input type="hidden" name="post_id" value="{{$offer->id}}" />
                        <input type="hidden" name="job_name" value="{{$offer->name}}" />
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="seeker_name">Name</label>
                                <input type="text" class="form-control" id="seeker_name" name="seeker_name" placeholder="Your full name" required="required" data-parsley-error-message="Enter your name" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="seeker_email">Email</label>
                                <input type="email" class="form-control" id="seeker_email" name="seeker_email" placeholder="Your valid email" required="required" data-parsley-error-message="Enter your email address" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="application_subject">Subject</label>
                            <input
                                type="text"
                                class="form-control"
                                name="application_subject"
                                id="application_subject"
                                placeholder="Mail Subject"
                                readonly="readonly"
                                required="required"
                                data-parsley-error-message="Enter your subject"
                                value="Immigration Application for : {{$offer->name}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="cvFile" class="btn btn-primary cv_label">Upload your CV</label>
                            <input type="file" name="cvFile" id="cvFile" class="hidden-field" accept=".pdf,.doc" required="required" data-parsley-error-message="Upload your cv in doc or pdf format" />
                        </div>
                        <div class="form-group">
                            <label for="application_message">Your message</label>
                            <textarea rows="5" cols="7" name="application_message" class="form-control" placeholder="Your comments..." required="required" data-parsley-error-message="What's on your mind?"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required="required" data-parsley-error-message="Make sure Everything is done" />
                                <label class="form-check-label" for="gridCheck">
                                    Everything is done
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Application</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-job-sidebar">
                    <div class="sjs_box">
                        <h3>Study Summary</h3>
                        <ul class="single-job-sidebar-features">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <h6>Location</h6>
                                <p>{{$offer->country->name}}</p>
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                <h6>Date Posted</h6>
                                <p>{{$offer->created_at->format('d F Y')}}</p>
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                <h6>Posted Ago</h6>
                                <p>{{ Carbon\Carbon::parse($offer->created_at)->diffForHumans()}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#cvFile").change(function (e) {
            var fileName = e.target.files[0].name;
            $(".cv_label").text("Change file : " + fileName);
        });
    });
</script>

@endsection
