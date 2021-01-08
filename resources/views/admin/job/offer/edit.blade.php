@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_all_job')}}">Jobs</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Edit Job</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Job</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('admin_edit_job', $jobOffer->id) }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label class="w-100">Is Published</label>
              <label class="toggle-switch toggle-switch-success">
                <input type="checkbox" name="is_published" {{ $jobOffer->is_published ? 'checked="checked"' : '' }}>
                <span class="toggle-slider round"></span>
              </label>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="submit_email">Notification Email<span class="text-danger">*</span></label>
              <input type="text" name="submit_email" class="form-control" id="submit_email" placeholder="Notification Email" value="{{$jobOffer->submit_email}}" required="required">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="txtName">Name<span class="text-danger">*</span></label>
              <input type="text" name="name" class="form-control" value="{{$jobOffer->name}}" id="txtName" placeholder="Job Name"  required="required">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="hot_job_title">Hot Job Title<span class="text-danger">*</span></label>
              <input type="text" name="hot_job_title" class="form-control" value="{{$jobOffer->hot_job_title}}" id="hot_job_title" placeholder="Hot Job Title"  required="required">
                </div>
              </div>
            </div>

            <div class="form-group">

             <div class="row">
               <div class="col-md-3 col-sm-3 col-xs-12">
                <label class="w-100">Entry Level</label>
              <label class="toggle-switch toggle-switch-success">
                <input type="checkbox" name="is_entry_level"  {{ $jobOffer->is_entry_level ? 'checked="checked"' : '' }}>
                <span class="toggle-slider round"></span>
              </label>
             </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <label class="w-100">Mid Level</label>
              <label class="toggle-switch toggle-switch-success">
                <input type="checkbox" name="is_mid_level"  {{ $jobOffer->is_mid_level ? 'checked="checked"' : '' }}>
                <span class="toggle-slider round"></span>
              </label>
             </div>

             <div class="col-md-3 col-sm-3 col-xs-12">
                <label class="w-100">Top Level</label>
              <label class="toggle-switch toggle-switch-success">
                <input type="checkbox" name="is_top_level"  {{ $jobOffer->is_top_level ? 'checked="checked"' : '' }}>
                <span class="toggle-slider round"></span>
              </label>
             </div>
             </div>

            </div>

            <div class="form-group">
             <div class="row mb-3">
               <div class="col-12">
                  <h4 class="card-title">Employment Status</h4>
               </div>
             </div>
             <div class="row">
              @foreach($employmentStatus as $item)
                <?php $isExist = 0; ?>
                @foreach($jobOffer->emplyment_status_maper as $beMaper)
                  <?php
                  if($beMaper->status_id == $item->id){
                    $isExist++;
                  }
                  ?>
                @endforeach

               <div class="col-md-2 col-sm-3 col-xs-12">
                <label class="w-100">{{$item->name}}</label>
                <label class="toggle-switch toggle-switch-success">
                  @if($isExist > 0)
                  <input type="checkbox" name="employment_status[]" value="{{$item->id}}" checked="">
                  @else
                  <input type="checkbox" name="employment_status[]" value="{{$item->id}}">
                  @endif
                  <span class="toggle-slider round"></span>
                </label>
             </div>
             @endforeach
           </div>
         </div>

           <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="company_name">Company<span class="text-danger">*</span></label>
              <input type="text" name="company_name" class="form-control" value="{{$jobOffer->company_name}}" id="company_name" placeholder="Company"  required="required">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="experience_required">Experience Required<span class="text-danger">*</span></label>
              <input type="text" name="experience_required" class="form-control" value="{{$jobOffer->experience_required}}" id="experience_required" placeholder="Experience Required"  required="required">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="no_of_vacancy">Vacancy<span class="text-danger">*</span></label>
              <input type="number" name="no_of_vacancy" class="form-control" value="{{$jobOffer->no_of_vacancy}}" id="no_of_vacancy" placeholder="Vacancy"  required="required">
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="deadline_date">Deadline<span class="text-danger">*</span></label>
              <input type="date" name="deadline_date" class="form-control" value="{{$jobOffer->deadline_date}}" id="deadline_date" placeholder="Vacancy"  required="required">
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
                      @if($jobOffer->country_id == $item->id )
                      <option value="{{ $item->id }}" selected="true">{{ $item->name }}</option>
                      @else
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                  <label for="category_id">Category<span class="text-danger">*</span></label>
                 <select name="category_id" id="category_id" class="form-control" required="required">
                    <option value="">-- Select Your Category --</option>
                    @foreach($categories as $item)
                      @if($jobOffer->category_id == $item->id )
                      <option value="{{ $item->id }}" selected="true">{{ $item->name }}</option>
                      @else
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>


                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label for="salary_range">Salary<span class="text-danger">*</span></label>
              <input type="text" name="salary_range" value="{{$jobOffer->salary_range}}" class="form-control" id="salary_range" placeholder="Salary"  required="required">
                </div>

              </div>
            </div>


            <div class="form-group">
              <label for="job_context">Job context<span class="text-danger">*</span></label>
              <textarea id="job_context" class="form-control my_editor" rows="10" cols="30" name="job_context" aria-label="job_context" required="required">{!! $jobOffer->job_context !!}</textarea>
            </div>


            <div class="form-group">
              <label for="special_instruction">Special Instruction for Job Seekers</label>
              <textarea id="special_instruction" class="form-control my_editor" rows="10" cols="30" name="special_instruction" aria-label="special_instruction">{!! $jobOffer->special_instruction !!}</textarea>
            </div>

            <div class="form-group">
              <label for="apply_procedure">Apply procedure</label>
              <textarea id="apply_procedure" class="form-control my_editor" rows="10" cols="30" name="apply_procedure" aria-label="apply_procedure">{!! $jobOffer->apply_procedure !!}</textarea>
            </div>

            <div class="form-group">
              <label for="job_responsibility">Job responsibilities<span class="text-danger">*</span></label>
              <textarea id="job_responsibility" class="form-control my_editor" rows="10" cols="30" name="job_responsibility" aria-label="job_responsibility" required="required">{!! $jobOffer->job_responsibility !!}</textarea>
            </div>

            <div class="form-group">
              <label for="aditional_salary_info">Additional Salary Info</label>
              <textarea id="aditional_salary_info" class="form-control my_editor" rows="10" cols="30" name="aditional_salary_info" aria-label="aditional_salary_info">{!! $jobOffer->aditional_salary_info !!}</textarea>
            </div>

            <div class="form-group">
              <label for="educational_requirment">Educational requirements<span class="text-danger">*</span></label>
              <textarea id="educational_requirment" class="form-control my_editor" rows="10" cols="30" name="educational_requirment" aria-label="educational_requirment" required="required">{!! $jobOffer->educational_requirment !!}</textarea>
            </div>

         <div class="form-group">
             <div class="row mb-3">
               <div class="col-12">
                  <h4 class="card-title">Compensation & other benefits</h4>
               </div>
             </div>
             <div class="row">
              @foreach($JobBenefites as $item)

                <?php $isExist = 0; ?>
                @foreach($jobOffer->benefit_maper as $beMaper)
                  <?php
                  if($beMaper->benefite_id == $item->id){
                    $isExist++;
                  }
                  ?>
                @endforeach

               <div class="col-md-2 col-sm-3 col-xs-12">
                <label class="w-100">{{$item->name}}</label>
                <label class="toggle-switch toggle-switch-success">
                  @if($isExist > 0)
                  <input type="checkbox" name="job_benefit[]" value="{{$item->id}}" checked="checked">
                  @else
                  <input type="checkbox" name="job_benefit[]" value="{{$item->id}}">
                  @endif
                  <span class="toggle-slider round"></span>
                </label>
             </div>
             @endforeach
           </div>
         </div>

         <div class="form-group">
              <label for="company_information">Company Information<span class="text-danger">*</span></label>
              <textarea id="company_information" class="form-control my_editor" rows="10" cols="30" name="company_information" aria-label="company_information" required="required">{!! $jobOffer->company_information !!}</textarea>
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
        ActiveLeftSideMenuOnLoad(".job_nav ", 5);
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
