@extends('layouts.master')

@section('meta-tags')
	<meta name="robots" content="noindex, nofollow">
@endsection

@section('title')
	Login
@endsection

@section('content')

	<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="password">Access Code</label>
			<input id="password" type="password" class="form-control form-control-lg{{ count($errors) ? ' is-invalid' : '' }}" name="password" placeholder="Enter the access code given to you by the DSO." required autofocus />

			@if (count($errors))
				<div class="invalid-feedback">
					<strong>{{ $errors->first('message') }}</strong>
				</div>
			@endif
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-lg btn-block">
				Login
			</button>
		</div>
	</form>

@endsection