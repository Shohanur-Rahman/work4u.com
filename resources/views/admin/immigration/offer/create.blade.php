@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_immigrations_offer')}}">Immigrations</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Add Immigration</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Immigration</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('admin_save_immigration') }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label class="w-100">Is Published</label>
              <label class="toggle-switch toggle-switch-success">
                <input type="checkbox" name="is_published" checked>
                <span class="toggle-slider round"></span>
              </label>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="submit_email">Notification Email<span class="text-danger">*</span></label>
              <input type="text" name="submit_email" class="form-control" id="submit_email" placeholder="Notification Email"  required="required">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="txtName">Name<span class="text-danger">*</span></label>
              <input type="text" name="name" class="form-control" id="txtName" placeholder="Name"  required="required">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="summary">Offer summary<span class="text-danger">*</span></label>
              <input type="text" name="summary" class="form-control" id="summary" placeholder="Offer summary"  required="required">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="country_id">Country<span class="text-danger">*</span></label>
                 <select name="country_id" id="country_id" class="form-control" required="required">
                    <option value="">-- Select Your Country --</option>
                    @foreach($countries as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="category_id">Category<span class="text-danger">*</span></label>
                 <select name="category_id" id="category_id" class="form-control" required="required">
                    <option value="">-- Select Your Category --</option>
                    @foreach($categories as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>


                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="age">Age<span class="text-danger">*</span></label>
              <input type="text" name="age" class="form-control" id="age" placeholder="Age"  required="required">
                </div>

              </div>
            </div>


            <div class="form-group">
              <label for="educational_requirment">Educational requirements<span class="text-danger">*</span></label>
              <textarea id="educational_requirment" class="form-control my_editor" rows="10" cols="30" name="educational_requirment" aria-label="educational_requirment" required="required"></textarea>
            </div>


            <div class="form-group">
              <label for="ielts_requirment">IELTS requirements</label>
              <textarea id="ielts_requirment" class="form-control my_editor" rows="10" cols="30" name="ielts_requirment" aria-label="ielts_requirment" required="required"></textarea>
            </div>

            <div class="form-group">
              <label for="apply_instruction">Apply Instructions</label>
              <textarea id="apply_instruction" class="form-control my_editor" rows="10" cols="30" name="apply_instruction" aria-label="apply_instruction" required="required"></textarea>
            </div>

            <div class="form-group">
              <label for="extra_title1">Extra field lavel 1</label>
              <input type="text" name="extra_title1" class="form-control" id="txtSummary" placeholder="Extra field lavel 1">
            </div>

            <div class="form-group">
              <label for="extra_description1">Extra field 1 description</label>
              <textarea id="extra_description1" class="form-control my_editor" rows="10" cols="30" name="extra_description1" aria-label="extra_description1"></textarea>
            </div>

            <div class="form-group">
              <label for="extra_title2">Extra field lavel 2</label>
              <input type="text" name="extra_title2" class="form-control" id="txtSummary" placeholder="Extra field lavel 2">
            </div>

            <div class="form-group">
              <label for="extra_description2">Extra field 2 description</label>
              <textarea id="extra_description2" class="form-control my_editor" rows="10" cols="30" name="extra_description2" aria-label="extra_description2"></textarea>
            </div>

            <div class="form-group">
              <label for="extra_title3">Extra field lavel 3</label>
              <input type="text" name="extra_title3" class="form-control" id="txtSummary" placeholder="Extra field lavel 3">
            </div>

            <div class="form-group">
              <label for="extra_description3">Extra field 3 description</label>
              <textarea id="extra_description3" class="form-control my_editor" rows="10" cols="30" name="extra_description3" aria-label="extra_description3"></textarea>
            </div>


            <a class="btn btn-danger mr-2" href="{{route('admin_all_job')}}"> Back</a>
            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        ActiveLeftSideMenuOnLoad(".immigration_nav ", 3);
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
