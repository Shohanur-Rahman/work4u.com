@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('sms_list')}}">SMS</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>Delete SMS</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Delete SMS</h4>
            <p class="text-danger my-3">If you delete a sms you cann't recover it from server. Please confirm PIN <strong>{{$randomText}}</strong> to Delete. </p>
            <form class="forms-sample" method="POST" action="{{ route('delete_sms_post', $sms->id) }}" enctype="multipart/form-data" data-parsley-validate>
              @csrf
                <input type="hidden" value="{{$randomText}}" id="hdnDeletePIN" />
                <input type="hidden" value="{{$sms->id}}" name="id" />
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="form-group row">
                        <input class="form-control" data-parsley-equalto="#hdnDeletePIN" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <input type="submit" class="btn btn-danger" value="Delete" />
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        ActiveLeftSideMenuOnLoad(".sms_nav ", 0);
    });
  </script>

@endsection