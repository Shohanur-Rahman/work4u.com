@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_all_job')}}">Jobs</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_job_comments')}}">Comments</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Edit Comment</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Comment</h4>
          <p class="card-description">
            field all required <span class="text-danger">*</span> field.
          </p>
          <form class="forms-sample" method="POST" action="{{ route('admin_update_job_comment',$comment->id) }}" enctype="multipart/form-data" data-parsley-validate>
          	@csrf
            <div class="form-group">
              <label class="w-100">Is Approve</label>
              <label class="toggle-switch toggle-switch-success">
                <input type="checkbox" name="is_approved" {{ $comment->is_approved ? 'checked="checked"' : '' }}>
                <span class="toggle-slider round"></span>
              </label>  
            </div>

            <div class="form-group">
              <label for="comment_text">Comment</label>
              <textarea id="comment_text" class="form-control" rows="10" cols="30" name="comment_text" aria-label="comment_text">{!! $comment->comment_text !!}</textarea>
            </div>
            
            <button class="btn btn-danger mr-2" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      ActiveLeftSideMenuOnLoad(".job_nav ", 6);
    });
  </script>

@endsection