@extends ('layouts.dso.master')

@section ('title')
	Dashboard - Searching...
@endsection

@section ('content')

	@foreach ($logs as $log)
		{{ $log->id }}
	@endforeach

@endsection