@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_study_offer')}}">Study</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Edit Offer</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Offer</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('update_study_offer',$offer->id) }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf


            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label class="w-100">Is Published</label>
              <label class="toggle-switch toggle-switch-success">
                <input type="checkbox" name="is_published" {{ $offer->is_published ? 'checked="checked"' : '' }}>
                <span class="toggle-slider round"></span>
              </label>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="submit_email">Notification Email<span class="text-danger">*</span></label>
              <input type="text" name="submit_email" class="form-control" id="submit_email" placeholder="Notification Email" value="{{$offer->submit_email}}" required="required">
                </div>
              </div>
            </div>


            <div class="form-group">
              <label for="country">Country<span class="text-danger">*</span></label>
              <select name="country_id" id="country" class="form-control" required="required">
                <option value="">-- Select Your Country --</option>
                @foreach($countries as $item)
                  <option value="{{ $item->id }}" {{ $item->id == $offer-> country_id? 'selected="selected"' : '' }}>{{ $item->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="txtName">Subject Name<span class="text-danger">*</span></label>
              <input type="text" name="name" class="form-control" id="txtName" placeholder="Subject Name" value="{{$offer->name}}"  required="required">
            </div>
            <div class="form-group">
              <label for="txtSummary">Offer summary<span class="text-danger">*</span></label>
              <input type="text" name="summary" class="form-control" id="txtSummary" value="{{$offer->summary}}" placeholder="Offer summary"  required="required">
            </div>

            <div class="form-group">
              <label for="educational_requirment">Educational requirements for admission<span class="text-danger">*</span></label>
              <textarea id="educational_requirment" class="form-control my_editor" rows="10" cols="30" name="educational_requirment" aria-label="educational_requirment" required="required">{!! $offer->educational_requirment !!}</textarea>
            </div>

            <div class="form-group">
              <label for="financial_requirement">Financial requirements for Study<span class="text-danger">*</span></label>
              <textarea id="financial_requirement" class="form-control my_editor" rows="10" cols="30" name="financial_requirement" aria-label="financial_requirement" required="required">{!! $offer->financial_requirement !!}</textarea>
            </div>

            <div class="form-group">
              <label for="documents_required">Documents required for Application<span class="text-danger">*</span></label>
              <textarea id="documents_required" class="form-control my_editor" rows="10" cols="30" name="documents_required" aria-label="documents_required" required="required">{!! $offer->documents_required !!}</textarea>
            </div>

            <div class="form-group">
              <label for="extra_title1">Extra field lavel 1</label>
              <input type="text" name="extra_title1" class="form-control" value="{{$offer->extra_title1}}" id="extra_title1" placeholder="Extra field lavel 1">
            </div>

            <div class="form-group">
              <label for="extra_details1">Extra field 1 description</label>
              <textarea id="extra_details1" class="form-control my_editor" rows="10" cols="30" name="extra_details1" aria-label="extra_details1">{!! $offer->extra_details1 !!}</textarea>
            </div>

            <div class="form-group">
              <label for="extra_title2">Extra field lavel 2</label>
              <input type="text" name="extra_title2" class="form-control" value="{{$offer->extra_title2}}" id="extra_title2" placeholder="Extra field lavel 2">
            </div>

            <div class="form-group">
              <label for="extra_document2">Extra field 2 description</label>
              <textarea id="extra_document2" class="form-control my_editor" rows="10" cols="30" name="extra_document2" aria-label="extra_document2">{!! $offer->extra_document2 !!}</textarea>
            </div>

            <div class="form-group">
              <label for="extra_title3">Extra field lavel 3</label>
              <input type="text" name="extra_title3" class="form-control" value="{{$offer->extra_title3}}" id="extra_title3" placeholder="Extra field lavel 3">
            </div>

            <div class="form-group">
              <label for="extra_document3">Extra field 3 description</label>
              <textarea id="extra_document3" class="form-control my_editor" rows="10" cols="30" name="extra_document3" aria-label="extra_document3">{!! $offer->extra_document3 !!}</textarea>
            </div>

           <a class="btn btn-danger mr-2" href="{{route('admin_study_offer')}}"> Back</a>
            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      ActiveLeftSideMenuOnLoad(".study_nav ", 2);
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
