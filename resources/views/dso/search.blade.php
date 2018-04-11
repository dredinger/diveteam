@extends ('layouts.dso.master')

@section ('title')
	Dashboard - Searching for {{ $date }}...
@endsection

@section ('content')

	@foreach ($logs as $log)
		{{ $log->id }}
	@endforeach

@endsection