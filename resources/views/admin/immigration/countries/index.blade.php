@extends('layouts.admin_layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin_immigrations_offer')}}">Immigrations</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Countries</span></li>
                </ol>
            </nav>
        </div>
    </div>
    <h4>Countries</h4>
    <p class="my-3">This is Immigrations country list. You can create or update or delete countries from here. </p>
    <a href="{{route('admin_immigrations_countries')}}" class="btn btn-primary mb-3">Add New Country</a>

    <div class="row">
        <div class="col-md-4 col-sm-5 col-xs-12 mb-5">
            <div class="card">
                @if($country == null || $country->id <= 0)
                    <div class="card-body">
                        <h4 class="card-title">New Country</h4>
                        <p class="card-description">
                            field all required <span class="text-danger">*</span> field.
                        </p>
                        <form class="forms-sample" method="POST" action="{{ route('admin_immigration_save_country') }}"
                              enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="form-group">
                                <label for="txtName">Name</label>
                                <input type="text" name="name" class="form-control" id="txtName"
                                       placeholder="Country Name" required="">
                            </div>
                            <div class="form-group">
                                <div class="custom-uploder">
                                    <label class="full-width">Country Flag</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img
                                            src="{{ asset('assets/images/noimage.PNG')}}"
                                            id="uploadPreview"/>
                                    </label>
                                    <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" required="required"
                                           accept="image/*"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="w-100">Is Listed</label>
                                <label class="toggle-switch toggle-switch-success">
                                    <input type="checkbox" name="is_published" checked>
                                    <span class="toggle-slider round"></span>
                                </label>
                            </div>
                            <button class="btn btn-danger mr-2" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                @else
                    <div class="card-body">
                        <h4 class="card-title">Edit Country</h4>
                        <p class="card-description">
                            field all required <span class="text-danger">*</span> field.
                        </p>
                        <form class="forms-sample" method="POST"
                              action="{{ route('admin_immigration_update_country', $country->id) }}"
                              enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="form-group">
                                <label for="txtName">Name</label>
                                <input type="text" name="name" class="form-control" id="txtName"
                                       placeholder="Country Name" required="" value="{{ $country->name }}">
                            </div>
                            <div class="form-group">
                                <div class="custom-uploder">
                                    <label class="full-width">Country Flag</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img
                                            src="{{$country->flag != null ? asset($country->flag) : asset('assets/images/noimage.PNG')}}"
                                            id="uploadPreview"/>
                                    </label>
                                    <input type="file" name="imgInp" class="hdn-uploder" id="imgInp"
                                           {{$country->flag != null ? '' : 'required="required"'}}
                                           accept="image/*"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="w-100">Is Listed</label>
                                <label class="toggle-switch toggle-switch-success">
                                    <input type="checkbox"
                                           name="is_published" {{ $country->is_published ? 'checked="checked"' : '' }}>
                                    <span class="toggle-slider round"></span>
                                </label>
                            </div>
                            <button class="btn btn-danger mr-2" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>

        <div class="col-md-8 col-sm-7 col-xs-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Country List</h4>
                    <div id="example">
                        <table id="category-table" class="table dataTable">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Published</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($countries as $country )
                                <tr>
                                    <td>{{$country->id}}</td>
                                    <td>{{$country->name}}</td>
                                    <td></td>
                                    @if($country->is_published)
                                        <td><i class="mdi mdi-marker-check tbl-icon"></i></td>
                                    @else
                                        <td><i class="mdi mdi-window-close tbl-icon"></i></td>
                                    @endif
                                    <td>
                                        <a class="btn btn-primary table-btn"
                                           href="{{route('admin_immigration_country_edit', $country->id)}}"><i
                                                class="mdi mdi-table-edit"></i></a>
                                        <a class="btn btn-danger table-btn"
                                           href="{{route('delete_imm_country', $country->id)}}"><i
                                                class="mdi mdi-delete-forever"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Published</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
            var successMessage = '{{ session()->get("message") }}';
            if ($.trim(successMessage) != "")
                showSwal('success-message', successMessage);

            ActiveLeftSideMenuOnLoad(".immigration_nav ", 1);

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
