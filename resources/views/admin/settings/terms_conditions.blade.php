@extends('layouts.admin_layout') @section('content')
<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('site_settings')}}">Settings</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Terms & Conditions</span></li>
          </ol>
        </nav>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Settings</h4>
                <p class="card-description">field all required <span class="text-danger">*</span> field.</p>
                @if($siteSettings)
                <form class="forms-sample" method="POST" action="{{route('update_terms_settings', $siteSettings->id)}}" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="terms_conditions">Terms & Conditions<span class="text-danger">*</span></label>
                                <textarea id="terms_conditions" class="form-control my_editor" rows="10" cols="30" name="terms_conditions" aria-label="terms_conditions" required="required">{!! $siteSettings->terms_conditions !!}</textarea>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-danger mr-2" href="{{route('dashboard')}}"> Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>

                @else

                <form class="forms-sample" method="POST" action="{{route('save_terms_settings')}}" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 my-2">
                                <label for="terms_conditions">Terms & Conditions<span class="text-danger">*</span></label>
                                <textarea id="terms_conditions" class="form-control my_editor" rows="10" cols="30" name="terms_conditions" aria-label="terms_conditions" required="required"></textarea>
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

        ActiveLeftSideMenuOnLoad(".settings_nav ", 4);
        var editor = $(".my_editor").kendoEditor({
            tools: [
                "bold",
                "italic",
                "underline",
                "strikethrough",
                "justifyLeft",
                "justifyCenter",
                "justifyRight",
                "justifyFull",
                "insertUnorderedList",
                "insertOrderedList",
                "indent",
                "outdent",
                "createLink",
                "unlink",
                "insertImage",
                "insertFile",
                "subscript",
                "superscript",
                "tableWizard",
                "createTable",
                "addRowAbove",
                "addRowBelow",
                "addColumnLeft",
                "addColumnRight",
                "deleteRow",
                "deleteColumn",
                "mergeCellsHorizontally",
                "mergeCellsVertically",
                "splitCellHorizontally",
                "splitCellVertically",
                "viewHtml",
                "formatting",
                "cleanFormatting",
                "copyFormat",
                "applyFormat",
                "fontName",
                "fontSize",
                "foreColor",
                "backColor",
                "print"
            ]
        });
    });

</script>

@endsection
