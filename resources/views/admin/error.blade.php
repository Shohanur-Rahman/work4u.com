@extends('layouts.user_layout')

@section('content')

<div class="container">
	<div class="row mt-5">
		<p class="text-danger">
			Error Occured: {{$exception}}
		</p>
	</div>
</div>

@endsection