@extends('layouts.admin_layout') @section('content')
<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('site_settings')}}">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Others Settings</span></li>
          </ol>
        </nav>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Settings</h4>
                <p class="card-description">field all required <span class="text-danger">*</span> field.</p>
                @if($siteSettings)
                <form class="forms-sample" method="POST" action="{{route('update_others_settings', $siteSettings->id)}}" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="facebook_link">Facebook Link<span class="text-danger">*</span></label>
                                <input type="text" name="facebook_link" class="form-control" id="facebook_link" placeholder="https://www.facebook.com/youpage" value="{{$siteSettings->facebook_link}}" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" name="twitter_link" value="{{$siteSettings->twitter_link}}" class="form-control" id="twitter_link" placeholder="https://www.twitter.com/youpage"/>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="linkdin_link">Linkdin Link</label>
                                <input type="text" name="linkdin_link" value="{{$siteSettings->linkdin_link}}" class="form-control" id="linkdin_link" placeholder="https://www.linkdin.com/youpage"/>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="website_title">Website Title<span class="text-danger">*</span></label>
                                <input type="text" name="website_title" value="{{$siteSettings->website_title}}" class="form-control" id="website_title" placeholder="MyWebSite" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="website_tag">Website Tag<span class="text-danger">*</span></label>
                                <input type="text" name="website_tag" value="{{$siteSettings->website_tag}}" class="form-control" id="website_tag" placeholder="A demo website" required="required" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="google_analytics_id">Google Analytics ID</label>
                                <input type="text" name="google_analytics_id" value="{{$siteSettings->google_analytics_id}}" class="form-control"id="google_analytics_id" placeholder="846587254"/>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="seo_keywords">SEO keywords<span class="text-danger">*</span></label>
                                <input type="text" name="seo_keywords" value="{{$siteSettings->seo_keywords}}" class="form-control" value="" id="seo_keywords" placeholder="keyword1, keyword2, Keyword3..." required="required" />
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="seo_description">SEO Descriptions<span class="text-danger">*</span></label>
                                <input type="text" name="seo_description" value="{{$siteSettings->seo_description}}" class="form-control" value="" id="seo_description" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum ante..." required="required" />
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="important_news">Important News</label>
                                <input type="text" name="important_news" value="{{$siteSettings->important_news}}" class="form-control" value="" id="seo_description" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum ante..." />
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-danger mr-2" href="{{route('dashboard')}}"> Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>

                @else

                <form class="forms-sample" method="POST" action="{{route('save_others_settings')}}" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="facebook_link">Facebook Link</label>
                                <input type="text" name="facebook_link" class="form-control" id="facebook_link" placeholder="https://www.facebook.com/youpage" value=""/>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" name="twitter_link" value="" class="form-control" value="" id="twitter_link" placeholder="https://www.twitter.com/youpage"/>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="linkdin_link">Linkdin Link</label>
                                <input type="text" name="linkdin_link" value="" class="form-control" value="" id="linkdin_link" placeholder="https://www.linkdin.com/youpage"/>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="website_title">Website Title<span class="text-danger">*</span></label>
                                <input type="text" name="website_title" value="" class="form-control" value="" id="website_title" placeholder="MyWebSite" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="website_tag">Website Tag<span class="text-danger">*</span></label>
                                <input type="text" name="website_tag" value="" class="form-control" value="" id="website_tag" placeholder="A demo website" required="required" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="google_analytics_id">Google Analytics ID</label>
                                <input type="text" name="google_analytics_id" value="" class="form-control" value="" id="google_analytics_id" placeholder="846587254"/>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="seo_keywords">SEO keywords<span class="text-danger">*</span></label>
                                <input type="text" name="seo_keywords" value="" class="form-control" value="" id="seo_keywords" placeholder="keyword1, keyword2, Keyword3..." required="required" />
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="seo_description">SEO Descriptions<span class="text-danger">*</span></label>
                                <input type="text" name="seo_description" value="" class="form-control" value="" id="seo_description" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum ante..." required="required" />
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="important_news">Important News</label>
                                <input type="text" name="important_news" class="form-control" value="" id="seo_description" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum ante..." />
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-danger mr-2" href="{{route('dashboard')}}"> Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var successMessage = '{{ session()->get("message") }}';
        if ($.trim(successMessage) != "")
            showSwal('success-message', successMessage);

        ActiveLeftSideMenuOnLoad(".settings_nav ", 5);

    });

</script>

@endsection
