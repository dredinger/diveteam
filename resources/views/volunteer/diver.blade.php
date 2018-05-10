@extends ('layouts.master')

@section ('title')
	<a href="{{ route('volunteer.home') }}">Volunteer Information</a> <svg class="feather"><use xlink:href="{{ asset('/feather/feather-sprite.svg#chevron-right') }}"/></svg>Diver
@endsection

@section ('content')

	<div class="card card-inverse card-primary lead text-uppercase text-center font-weight-bold">
		<div class="card-block p-4">More informaton will be added shortly.</div>
	</div>
		<div class="card-block mt-3">If you would like to find out more information for this position, we will have a contact form available for you soon.</div>
	</div>

@endsection