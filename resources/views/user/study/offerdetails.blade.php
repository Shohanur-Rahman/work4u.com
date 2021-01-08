@extends('layouts.user_layout') 
@section('title', $offer->name) 

@section('content')

<div class="single_job">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row offer-details-row">
                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">Subject Name</h2>
                        <div class="job-details-content">
                            {{$offer->name}}
                        </div>
                    </div>
                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">Offer summary</h2>
                        <div class="job-details-content">
                            {{$offer->summary}}
                        </div>
                    </div>
                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">Educational requirements for admission</h2>
                        <div class="job-details-content">
                            {!!html_entity_decode($offer->educational_requirment)!!}
                        </div>
                    </div>
                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">Financial requirements for Study</h2>
                        <div class="job-details-content">
                            {!!html_entity_decode($offer->financial_requirement)!!}
                        </div>
                    </div>
                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">Documents required for Application</h2>
                        <div class="job-details-content">
                            {!!html_entity_decode($offer->documents_required)!!}
                        </div>
                    </div>
                    @if($offer->extra_title1)

                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">{{$offer->extra_title1}}</h2>
                        <div class="job-details-content">
                            {!!html_entity_decode($offer->extra_details1)!!}
                        </div>
                    </div>
                    @endif @if($offer->extra_title2)

                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">{{$offer->extra_title2}}</h2>
                        <div class="job-details-content">
                            {!!html_entity_decode($offer->extra_document2)!!}
                        </div>
                    </div>
                    @endif @if($offer->extra_title3)

                    <div class="col-md-12 single_job_main">
                        <h2 class="job-details-header">{{$offer->extra_title3}}</h2>
                        <div class="job-details-content">
                            {!!html_entity_decode($offer->extra_document3)!!}
                        </div>
                    </div>
                    @endif

                    <div class="section-divider"></div>
                    <div class="col-md-12 single_job_main">
                        <h2>Place Your Comments</h2>
                        <div class="row two_col featured_box_outer">
                            <div class="col-md-8">
                                <div class="post-content">
                                    @foreach($comments as $comment)

                                    <div class="post-container">
                                        <img src="{{asset('assets/images/avatar6.png')}}" alt="user" class="profile-photo-md pull-left" />
                                        <div class="post-detail">
                                            <div class="user-info">
                                                <h5>{{$comment->auth_name}}
                                                </h5>
                                                <p class="text-muted">{{$comment->created_at->format('d F Y')}}</p>
                                            </div>
                                            <div class="line-divider"></div>
                                            <div class="post-text">
                                                <p>
                                                    {!!html_entity_decode($comment->comment_text)!!}
<a class="btn btn-primary reply-icon" data-toggle="collapse" href="#collapsreply" role="button" aria-expanded="false" aria-controls="collapsreply">
    <i class="fas fa-reply"></i>
  </a>
                                                </p>
                                            </div>

                                            @foreach($comment->reply_comments as $reply)

                                            @if($reply->is_approved)
                                            <div class="line-divider"></div>
                                            <div class="post-comment">
                                                <img src="{{asset('assets/images/avatar7.png')}}" alt="" class="profile-photo-sm" />
                                                <div class="user-info">
                                                    <h5>
                                                        {{$reply->auth_name}}
                                                        <span class="text-muted small-text">{{$reply->created_at->format('d F Y')}}</span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="post-comment reply-comments">
                                                <p>
                                                    {!!html_entity_decode($reply->comment_text)!!}</p>
                                            </div>
                                            @endif
                                            @endforeach

                                            <div class="collapse" id="collapsreply">
                                              <div class="comment-box">
                                                <div class="col-md-8 col-sm-8 col-xs-10">
                                                    <form class="forms-sample" method="POST" action="{{ route('study_offer_comments') }}" enctype="multipart/form-data" data-parsley-validate>
                                                        @csrf
                                                        <input type="hidden" name="post_id" value="{{$offer->id}}" />
                                                        <input type="hidden" name="comment_id" value="{{$comment->id}}" />
                                                        <div class="form-group">
                                                            <input type="text" name="auth_name" class="form-control" placeholder="Your name..." required="required"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="auth_email" class="form-control" placeholder="Your email..." required="required"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea rows="5" cols="7" name="comment_text" class="form-control" placeholder="Your comments..." required="required"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button class="btn btn-success float-right" type="submit">Reply Comment</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="comment-box">
                                    <form class="forms-sample" method="POST" action="{{ route('study_offer_comments') }}" enctype="multipart/form-data" data-parsley-validate>
                                        @csrf

                                        <input type="hidden" name="post_id" value="{{$offer->id}}" />
                                        <div class="form-group">
                                            <input type="text" name="auth_name" class="form-control" placeholder="Your name..." required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="auth_email" class="form-control" placeholder="Your email..." required="required" />
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="5" cols="7" name="comment_text" class="form-control" placeholder="Your comments..." required="required"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success float-right" type="submit">Save Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="sjs_box_action">
                    <a class="btn btn-third" href="{{route('contact_page')}}">Contact Employer</a>
                    <p>- or -</p>
                    <a class="btn btn-primary" href="{{route('user_study_offeres_application', ['countryname'=> $countryname,'countryid'=> $offer ->country_id,'id'=> $offer ->id])}}">Apply Study</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
