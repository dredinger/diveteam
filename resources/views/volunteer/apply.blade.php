@extends ('layouts.master')

@section ('title')
	<a href="{{ route('volunteer.home') }}">Volunteer Information</a> <svg class="feather"><use xlink:href="{{ asset('/feather/feather-sprite.svg#chevron-right') }}"/></svg>Apply Now!
@endsection

@section ('content')

	<div class="card card-inverse card-primary lead text-uppercase text-center font-weight-bold">
		<div class="card-block p-4">Please use the form below to apply as a volunteer for the Deep Blue Sea Foundation.</div>
	</div>
		<div class="card-block mt-3"><iframe src="https://www.volgistics.com/ex/portal.dll/ap?ap=1767231358&embedded=on" style="width:100%;height:500px"></iframe></div>
	</div>

@endsection