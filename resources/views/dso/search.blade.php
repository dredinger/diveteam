@extends ('layouts.dso.master')

@section ('title')
	Dashboard - Searching for {{ $date }}...
@endsection

@section ('content')

	<div class="row">
		<div class="col">
		<table class="table table-bordered table-striped">
			<thead>
				<tr class="font-weight-bold">
					<th scope="col">Log ID</th>
					<th scope="col">Checks?</th>
					<th scope="col">Last Update</th>
				</tr>
			</thead>
			<tbody>
			@if (count($logs) == 0)
				<tr><td colspan="3">No logs exist.</td></tr>
			@else
				@foreach ($logs as $log)
				@php
					if (! verifyDsoChecks($log)) {
						$check = 'danger';
						$status = '/feather/feather-sprite.svg#x-circle';
					} else {
						$check = 'success';
						$status = '/feather/feather-sprite.svg#check-circle';
					}
				@endphp
					<tr>
						<td><a href="{{ route('dso.logs.view', $log->id) }}">{{ $log->id }}</a></td>
						<td class="table-{{ $check }}"><svg class="feather"><use xlink:href="{{ asset($status) }}"/></svg></td>
						<td>{{ \Carbon\Carbon::parse($log->updated_at)->setTimezone('America/Denver')->toDayDateTimeString() }}</td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
		</div>
		<div class="col">
		<table class="table table-bordered table-striped">
			<thead>
				<tr class="font-weight-bold">
					<th scope="col">Note ID</th>
					<th scope="col">Content</th>
					<th scope="col">Last Update</th>
				</tr>
			</thead>
			<tbody>
			@if (count($notes) == 0)
				<tr><td colspan="3">No notes exist.</td></tr>
			@else
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
						<td>{{ $note->id }}</td>
						<td class="wordwrap">{{ $note->content }}</td>
						<td>{{ \Carbon\Carbon::parse($note->updated_at)->setTimezone('America/Denver')->toDayDateTimeString() }}</td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
		</div>
	</div>

@endsection