@extends ('layouts.dso.master')

@section ('title')
	Notes
@endsection

@section ('extra-nav')
<div class="btn-toolbar mb-2 mb-md-0">
	<div class="btn-group mr-2">
		<a href="{{ route('dso.notes.create') }}" class="btn btn-sm btn-outline-secondary">Create New Note</a>
	</div>
</div>
@endsection

@section ('content')
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Create Date</th>
					<th scope="col">Day of the Week</th>
					<th scope="col">Last Update</th>
					<th scope="col">Note</th>
					<th scope="col">View Log</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($notes as $note)
				@php
					if (isset($note->log_id) && $note->log_id != 0) {
						$route = route('dso.logs.view', $note->log_id);
						$link = '<a href="'.$route.'">View</a>';
					} else {
						$link = 'Not attached.';
					}
				@endphp
				<tr>
					<td scope="row">{{ $note->created_at->setTimeZone('America/Denver')->toFormattedDateString() }}</td>
					<td>{{ $note->created_at->setTimeZone('America/Denver')->format('l') }}</td>
					<td scope="row">{{ $note->updated_at->setTimeZone('America/Denver')->toFormattedDateString() }}</td>
					<td class="wordwrap">{{ $note->content }}</td>
					<td>{!! $link !!}</td>
				</tr>
			@endforeach
			</tbody>
		</table>

		<nav aria-label="All Logs Navigation">
			{{ $notes->links('vendor.pagination.bootstrap-4') }}
		</nav>
	</div>

@endsection