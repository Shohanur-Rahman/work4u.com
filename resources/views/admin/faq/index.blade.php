@extends('layouts.admin_layout')

@section('content')
<div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span>FAQ</span></li>
          </ol>
        </nav>
    </div>
</div>
<h4>All FAQ</h4>
<p class="my-3">This is FAQ list. You can send FAQ from here. </p>
<a href="{{route('faqs.create')}}" class="btn btn-primary mb-3">New FAQ</a>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 grid-margin stretch-card">
	<div class="card">
	        <div class="card-body">
	          <h4 class="card-title">FAQ List</h4>
	          <div id="example">
           			 <table id="category-table" class="table dataTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Question</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faqList as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->question}}</td>
                                     <td>{{$item->created_at->format('d F Y')}}</td>
                                      
                                    <td>
                                        <div class="btn-group float-right">
                                        <a class="btn btn-primary table-btn" href="{{route('faqs.edit', $item->id)}}"><i class="mdi mdi-table-edit"></i></a>
                                        <a class="btn btn-danger table-btn" href="{{route('faqs.delete', $item->id)}}"><i class="mdi mdi-delete-forever"></i></a>
                                            </div>
                                        
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Question</th>
                                    <th>Created</th>
                                    <th>Action</th>
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

        ActiveLeftSideMenuOnLoad(".faq_nav ", 0);
    });
</script>

@endsection