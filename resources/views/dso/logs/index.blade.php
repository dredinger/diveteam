@extends ('layouts.dso.master')

@section ('title')
	Logs
@endsection

@section ('extra-nav')
<div class="btn-toolbar mb-2 mb-md-0">
	<div class="btn-group mr-2">
		<a href="{{ route('dso.logs.create') }}" class="btn btn-sm btn-outline-secondary">Create Daily Log</a>
	</div>
</div>
@endsection

@section ('content')
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Date</th>
					<th scope="col">Day of the Week</th>
					<th scope="col">Checks in Place</th>
					<th scope="col">View</th>
				</tr>
			</thead>
			<tbody>
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
				<tr>
					<td scope="row">{{ $log->created_at->toDateString() }}</td>
					<td>{{ $log->created_at->format('l') }}</td>
					<td class="table-{{ $check }}"><svg class="feather"><use xlink:href="{{ asset($status) }}"/></svg></td>
					<td><a href="{{ route('dso.logs.view', $log->id) }}">View</a></td>
				</tr>
			@endforeach
			</tbody>
		</table>

		<nav aria-label="All Logs Navigation">
			{{ $logs->links('vendor.pagination.bootstrap-4') }}
		</nav>
	</div>

@endsection