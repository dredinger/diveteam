@extends ('layouts.dso.master')

@section ('title')
	Log #: {{ $log->id }}
@endsection

@section ('extra-nav')
<div class="btn-toolbar mb-2 mb-md-0">
	<div class="btn-group mr-2">
		<a href="{{ route('dso.logs') }}" class="btn btn-sm btn-outline-secondary">View Logs</a>
		<a href="{{ route('dso.logs.add') }}" class="btn btn-sm btn-outline-secondary">Add Daily Log</a>
	</div>
</div>
@endsection

@section ('content')

	@php
	if (verifyDsoChecks($log)) {
		$border = 'success';
		$status = 'All Checks In Place';
	} else {
		$border = 'danger';
		$status = 'Issue Found Regarding Checks';
	}
	@endphp

	<div class="card border-{{ $border }}">
		<div class="card-header">Log #{{ $log->id }} - Submitted on {{ $log->created_at }} ({{ $log->created_at->diffForHumans() }})</div>
		<div class="card-body">
			<p class="card-text">RES Jumppack PSI: {{ $log->psi_res }}</p>
			<p class="card-text">UTS Jumppack PSI: {{ $log->psi_uts }}</p>
			<p class="card-text">SW Jumppack PSI: {{ $log->psi_sw }}</p>
			<p class="card-text">DR Jumppack PSI: {{ $log->psi_dr }}</p>
			<p class="card-text">{{ $log->psi_uts }}</p>
			<p class="card-text">{{ $log->psi_uts }}</p>
			<p class="card-text">{{ $log->psi_uts }}</p>
			<p class="card-text">{{ $log->psi_uts }}</p>
			<p class="card-text">{{ $log->psi_uts }}</p>
		</div>
		@if ($log->pictureid)
		<div class="card-footer">
			<p class="card-text"><img src="{{ asset('storage/dso-pictures/' . $log->pictureid) }}" /></p>
		</div>
		@endif
	</div>

@endsection