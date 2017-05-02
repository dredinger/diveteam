@extends ('layouts.master')

@section ('content')

	<ul>
		@foreach ($downloads as $download)
			<li>{{ $download->name }}</li>
		@endforeach
	</ul>

@endsection