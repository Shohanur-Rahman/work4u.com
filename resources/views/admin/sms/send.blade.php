@extends('layouts.admin_layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sms_list')}}">SMS</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>New SMS</span></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">New Job</h4>
                    <p class="card-description">
                        field all required <span class="text-danger">*</span> field.
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('send_sms_to_number') }}"
                          enctype="multipart/form-data" data-parsley-validate>
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label for="receipoints">Mobile numbers <span class="text-danger">Seperate mobile number using (,) & Add country code befor number like 88(BD)*</span></label>
                                    <input type="text" name="receipoints" class="form-control" id="receipoints"
                                           placeholder="8801913655566" value="8801913655566" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label for="excelFile">Upload your Excel file <span class="text-danger">Make sure column name is mobile</span></label>
                                        <input type="file" name="excelFile" class="form-control" id="excelFile">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mt-5">
                                <label for="message">Message Text<span class="text-danger">&nbsp;Do not use single quotation (') in the message to avoid forbidden result*</span></label>
                                <textarea id="message" class="form-control my_editor" rows="10" cols="30" name="message"
                                          aria-label="message" required="required"></textarea>
                            </div>


                            <a class="btn btn-danger mr-2" href="{{route('sms_list')}}"> Back</a>
                            <button type="submit" class="btn btn-success">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            ActiveLeftSideMenuOnLoad(".sms_nav ", 0);
        });
    </script>

@endsection
