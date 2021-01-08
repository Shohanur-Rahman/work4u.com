@extends('layouts.user_layout')
@section('title', 'Job Countries')
@section('content')

<div class="container">

	@if(session()->get("message"))
	<div class="row mt-5">
      <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session()->get("message")}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      </div>
    </div>
    @endif
	<div class="row mt-5">
		<div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
			<div class="row">
				@foreach($countries as $cy)
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
						<a class="job-link" href="{{route('user_job_offeres', ['countryname'=> $cy->name,'id'=> $cy ->id])}}">
						<div class="category_box">
							<div class="cb_header">
								<img alt="" src="{{$cy->flag != null ? asset($cy->flag) : asset('assets/images/i-code.png')}}" class="cnt-flag">
								@if($cy->total_job!= null)
									<span class="job_count">{{$cy->total_job->count()}}</span>
								@else
								<span class="job_count">0</span>
								@endif
							</div>
							<div class="cb_bottom">
								<h3>{{$cy->name}}</h3>
							</div>
						</div>
						</a>
					</div>

				@endforeach
			</div>
		</div>
	</div>
</div>


@endsection
