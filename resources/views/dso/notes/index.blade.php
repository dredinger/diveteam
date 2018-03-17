@extends ('layouts.dso.master')

@section ('title')
	Notes Administration
@endsection

@section ('content')

	<div class="table-responsive list-group">
		<a href="{{ route('dso.notes') }}" class="list-group-item">View All Notes</a>
		<a href="{{ route('dso.notes.latest') }}" class="list-group-item">View Latest Note</a>
		<a href="{{ route('dso.notes.add') }}" class="list-group-item">Add New Note</a>
	</div>

@endsection