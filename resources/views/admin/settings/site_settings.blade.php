@extends('layouts.admin_layout') @section('content')
<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Settings</span></li>
          </ol>
        </nav>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Settings</h4>
                <p class="card-description">field all required <span class="text-danger">*</span> field.</p>
                @if($siteSettings)
                <form class="forms-sample" method="POST" action="{{route('update_site_settings', $siteSettings->id)}}" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="admin_email">Admin Email<span class="text-danger">*</span></label>
                                <input type="email" name="admin_email" class="form-control" id="admin_email" placeholder="Where you received your application email" value="{{$siteSettings->admin_email}}" required="required" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="company_address">Contact Location<span class="text-danger">*</span></label>
                                <input type="text" name="company_address" value="{{$siteSettings->company_address}}" class="form-control" value="" id="company_address" placeholder="Contact Location" required="required" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="mobile_number">Mobile Number<span class="text-danger">*</span></label>
                                <input type="text" name="mobile_number" value="{{$siteSettings->mobile_number}}" class="form-control" value="" id="mobile_number" placeholder="Mobile Number" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="company_email">Company Email<span class="text-danger">*</span></label>
                                <input type="email" name="company_email" value="{{$siteSettings->company_email}}" class="form-control" value="" id="company_email" placeholder="Visible to visitors" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="support_numbers">Support Numbers<span class="text-danger">*</span></label>
                                <input type="text" name="support_numbers" value="{{$siteSettings->support_numbers}}" class="form-control" value="" id="support_numbers" placeholder="Seperate each number with comma " required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="office_time">Office time<span class="text-danger">*</span></label>
                                <input type="text" name="office_time" value="{{$siteSettings->office_time}}" class="form-control" value="" id="office_time" placeholder="Office time" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                @if($siteSettings->logo_url)
                                 <div class="custom-uploder">
                                    <label class="full-width">Upload Your Logo</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img src="{{asset($siteSettings->logo_url)}}" id="uploadPreview" />
                                    </label>
                                    <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" accept="image/*" />
                                </div>
                                @else
                                <div class="custom-uploder">
                                    <label class="full-width">Upload Your Logo</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img src="{{asset('assets/images/noimage.PNG')}}" id="uploadPreview" />
                                    </label>
                                    <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" required="required" accept="image/*" />
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <a class="btn btn-danger mr-2" href="{{route('dashboard')}}"> Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>

                @else

                <form class="forms-sample" method="POST" action="{{route('save_site_settings')}}" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="admin_email">Admin Email<span class="text-danger">*</span></label>
                                <input type="email" name="admin_email" class="form-control" value="" id="admin_email" placeholder="Where you received your application email" required="required" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="company_address">Contact Location<span class="text-danger">*</span></label>
                                <input type="text" name="company_address" class="form-control" value="" id="company_address" placeholder="Contact Location" required="required" />
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="mobile_number">Mobile Number<span class="text-danger">*</span></label>
                                <input type="text" name="mobile_number" class="form-control" value="" id="mobile_number" placeholder="Mobile Number" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="company_email">Company Email<span class="text-danger">*</span></label>
                                <input type="email" name="company_email" class="form-control" value="" id="company_email" placeholder="Visible to visitors" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="support_numbers">Support Numbers<span class="text-danger">*</span></label>
                                <input type="text" name="support_numbers" class="form-control" value="" id="support_numbers" placeholder="Seperate each number with comma " required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <label for="office_time">Office time<span class="text-danger">*</span></label>
                                <input type="text" name="office_time" class="form-control" value="" id="office_time" placeholder="Office time" required="required" />
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 my-2">
                                <div class="custom-uploder">
                                    <label class="full-width">Upload Your Logo</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img src="{{asset('assets/images/noimage.PNG')}}" id="uploadPreview" />
                                    </label>
                                    <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" required="required" accept="image/*" />
                                </div>
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
        
        ActiveLeftSideMenuOnLoad(".settings_nav ", 1);

        $("#imgInp").change(function () {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $("#uploadPreview").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection
