@extends('layouts.admin_layout') @section('content')

<h4>Mail Box</h4>

<ul class="nav nav-tabs bg-primary" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active btn btn-info" id="tab-inbox" data-toggle="tab" href="#inbox" role="tab" aria-controls="inbox" aria-selected="true">Inbox</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-info" id="outbox-tab" data-toggle="tab" href="#outbox" role="tab" aria-controls="outbox" aria-selected="false">Outbox</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-info" id="compose-tab" data-toggle="tab" href="#compose" role="tab" aria-controls="compose" aria-selected="false"><i class="mdi mdi-lead-pencil"></i>&nbsp; Compose Email</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="inbox" role="tabpanel" aria-labelledby="tab-inbox">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Receive Mails</h4>
                        <div id="example">
                            <table id="category-table" class="table dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>From</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Seen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($inboxMails as $mail)
                                    <tr>
                                        <td>{{$mail->id}}</td>
                                        <td>{{$mail->from_email}}</td>
                                        <td>{{$mail->from_name}}</td>
                                        <td>{{$mail->subject}}</td>
                                        <td>{{$mail->created_at->format('d F Y')}}</td>
                                        @if($mail->is_seen)
                                        <td><i class="mdi mdi-marker-check tbl-icon"></i></td>
                                        @else
                                        <td><i class="mdi mdi-window-close tbl-icon"></i></td>
                                        @endif
                                        <td>
                                            <a class="btn btn-primary table-btn" href="{{route('edit_study_offer', $mail->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                            <a class="btn btn-danger table-btn"><i class="mdi mdi-delete-forever"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>From</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Seen</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="outbox" role="tabpanel" aria-labelledby="outbox-tab">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Receive Mails</h4>
                        <div id="example">
                            <table id="category-table" class="table dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>From</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Seen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($outboxMails as $mail)
                                    <tr>
                                        <td>{{$mail->id}}</td>
                                        <td>{{$mail->from_email}}</td>
                                        <td>{{$mail->from_name}}</td>
                                        <td>{{$mail->subject}}</td>
                                        <td>{{$mail->created_at->format('d F Y')}}</td>
                                        @if($mail->is_seen)
                                        <td><i class="mdi mdi-marker-check tbl-icon"></i></td>
                                        @else
                                        <td><i class="mdi mdi-window-close tbl-icon"></i></td>
                                        @endif
                                        <td>
                                            <a class="btn btn-primary table-btn" href="{{route('edit_study_offer', $mail->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                            <a class="btn btn-danger table-btn"><i class="mdi mdi-delete-forever"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>From</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Seen</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="compose" role="tabpanel" aria-labelledby="compose-tab">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Compose your email</h4>
                        <form class="forms-sample" method="POST" action="{{ route('mail_send_email') }}" enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="to_email">Email address</label>
                                        <input type="email" class="form-control" id="to_email" name="to_email" placeholder="Email" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message<span class="text-danger">*</span></label>
                                <textarea id="message" class="form-control my_editor" rows="10" cols="30" name="message" aria-label="message" required="required"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .nav-tabs .nav-link {
            background: #6f28a5;
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            var successMessage = '{{ session()->get("message") }}';
            if ($.trim(successMessage) != "") showSwal("success-message", successMessage);

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
</div>
