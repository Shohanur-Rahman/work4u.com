@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('sms_list')}}">SMS</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>View SMS</span></li>
          </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
      <div class="card">
        <div class="card-header">
          <h3>View SMS</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="receipoints"><strong>Mobile numbers :</strong></label>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="receipoints">{{$smsList->receipoints}}</label>
                </div>
            </div>

             <div class="row mt-3">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="receipoints"><strong>Message :</strong></label>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <label for="receipoints">{{$smsList->message}}</label>
                </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        ActiveLeftSideMenuOnLoad(".sms_nav ", 0);
    });
  </script>

@endsection