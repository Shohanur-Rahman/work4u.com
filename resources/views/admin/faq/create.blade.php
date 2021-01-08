@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('faqs.index')}}">FAQ</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>New FAQ</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">New FAQ</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('faqs.store') }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf

            <div class="form-group">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="question">Question</label>
              <input type="text" name="question" class="form-control" id="question" placeholder="Enter your question"  required="required">
                </div>
            </div>


         <div class="form-group mt-5">
              <label for="answers">Answer</label>
              <textarea id="answers" class="form-control my_editor" rows="10" cols="30" name="answers" aria-label="answers" required="required"></textarea>
            </div>


            <a class="btn btn-danger mr-2" href="{{route('sms_list')}}"> Back</a>
            <button type="submit" class="btn btn-success">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        ActiveLeftSideMenuOnLoad(".faq_nav ", 0);
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
