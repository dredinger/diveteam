@extends ('layouts.master')

@section ('title')
	DSO Administration
@endsection

@section ('content')

	<div class="table-responsive list-group">
		<a href="/dso/logs" class="list-group-item">Logs</a>
		<a href="/dso/notes" class="list-group-item">Notes</a>
	</div>

@endsection