@extends ('layouts.dso.master')

@section ('title')
	Dashboard - Searching for {{ $date }}...
@endsection

@section ('content')

	<div class="row">
		<div class="col">
		<table class="table table-bordered table-striped table-hover">
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
					$verify = verifyDsoChecks($log);
					if (count($verify) > 0) {
						$check = 'danger';
						$status = '/feather/feather-sprite.svg#x-circle';
					} else {
						$check = 'success';
						$status = '/feather/feather-sprite.svg#check-circle';
					}
				@endphp
					<tr class="clickable-row" data-url="{{ route('dso.logs.view', $log->id) }}">
						<td>{{ $log->id }}</td>
						<td class="table-{{ $check }}"><svg class="feather"><use xlink:href="{{ asset($status) }}"/></svg></td>
						<td>{{ \Carbon\Carbon::parse($log->updated_at)->toDayDateTimeString() }}</td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
		</div>
		@if ($date !== 'pictures')
		<div class="col">
		<table class="table table-bordered table-striped table-hover">
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
					<tr>
						<td>{{ $note->id }}</td>
						<td class="wordwrap">{{ $note->content }}</td>
						<td>{{ \Carbon\Carbon::parse($note->updated_at)->toDayDateTimeString() }}</td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
		</div>
		@endif
	</div>

@endsection

@section ('extra')

	<script>
		$(document).ready(function ($) {
			$('.clickable-row').click(function () {
				window.location = $(this).data('url');
			});
		});
	</script>

@endsection