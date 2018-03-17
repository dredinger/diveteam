@extends ('layouts.dso.master')

@section ('title')
	Logs Administration
@endsection

@section ('content')

	<div class="table-responsive list-group">
		<a href="{{ route('dso.logs') }}" class="list-group-item">View All Logs</a>
		<a href="{{ route('dso.logs.latest') }}" class="list-group-item">View Latest Log</a>
		<a href="{{ route('dso.logs.add') }}" class="list-group-item">Add New Log</a>
	</div>

@endsection