@extends ('layouts.dso.master')

@section ('title')
	Log #: {{ $log->id }}
@endsection

@section ('extra-nav')
<div class="btn-toolbar mb-2 mb-md-0">
	<div class="btn-group mr-2">
		<a href="{{ route('dso.logs.edit', $log->id) }}" class="btn btn-sm btn-outline-primary">Edit Log</a>
		<a href="{{ route('dso.logs') }}" class="btn btn-sm btn-outline-secondary">View Logs</a>
		<a href="{{ route('dso.logs.create') }}" class="btn btn-sm btn-outline-secondary">Create Daily Log</a>
	</div>
</div>
@endsection

@section ('content')

	@php
	$verify = verifyDsoChecks($log);
	if (count($verify) == 0) {
		$border = 'success';
		$status = 'All Checks In Place';
		$popover = '[' . $status . ']';
	} else {
		$border = 'danger';
		$status = 'Issue Found Regarding Checks';
		$displayErrors = '';
		foreach ($verify as $key => $error)
			$displayErrors .= $key . ' = ' . $error . '<br />';
		$popover = '<a tabindex="0" id="log-status" data-trigger="focus" data-toggle="popover" data-html="true" data-content="' . $displayErrors . '" title="Errors">[' . $status . ']</a>';
	}
	@endphp

	<div class="card border-{{ $border }}">
		<div class="card-header">Log #{{ $log->id }} - Submitted on {{ $log->created_at->toDayDateTimeString() }} ({{ $log->created_at->diffForHumans() }}) <small id="log-status" class="float-right text-{{ $border }}">{!! $popover !!}</small></div>
		<div class="card-body">
			<p class="card-text">RES Jumppack PSI: {{ $log->psi_res }}</p>
			<p class="card-text">UTS Jumppack PSI: {{ $log->psi_uts }}</p>
			<p class="card-text">SW Jumppack PSI: {{ $log->psi_sw }}</p>
			<p class="card-text">DR Jumppack PSI: {{ $log->psi_dr }}</p>
			<p class="card-text">Jumppack Masks In Place: {!! $log->jumppack_masks == 1 ? 'Yes' : '<span class="text-danger font-weight-bold">No</span>' !!}</p>
			<p class="card-text">Disinfectants Checked: {!! $log->disinfectants == 1 ? 'Yes' : '<span class="text-danger font-weight-bold">No</span>' !!}</p>
			<p class="card-text">Safety Diver Checklists Completed: {!! $log->sd_checklist == 1 ? 'Yes' : '<span class="text-danger font-weight-bold">No</span>' !!}</p>
			<p class="card-text">Third Floor AED Status: {!! $log->aed_third == 1 ? 'Green' : '<span class="text-danger font-weight-bold">Red</span>' !!}</p>
			<p class="card-text">Second Floor AED Status: {!! $log->aed_second == 1 ? 'Green' : '<span class="text-danger font-weight-bold">Red</span>' !!}</p>
			<p class="card-text">Third Floor O<sub>2</sub> PSI: {{ $log->psi_oxy_third }}</p>
			<p class="card-text">Second Floor O<sub>2</sub> PSI: {{ $log->psi_oxy_second }}</p>
			@if ($log->compressor_hours)
			<p class="card-text">Compressor Hours: {{ $log->compressor_hours }}</p>
			@endif
		</div>
		@if (count($log->notes))
		<ul class="list-group">
			@foreach ($log->notes as $note)
				<li class="list-group-item">
					<strong>{{ $note->ip }} noted {{ $note->created_at->diffForHumans() }}: &nbsp;</strong>{{ $note->content }}
				</li>
			@endforeach
		</ul>
		@endif
		@if ($log->picture_id)
		<div class="card-footer">
			<p class="card-text"><img class="img-fluid" src="{{ asset('storage/dso-pictures/' . $log->picture_id) }}" /></p>
		</div>
		@endif
	</div>

@endsection

@if (count($verify) > 0)
@section ('extra')


	<script type="text/javascript">
		$(function () {
			$('[data-toggle="popover"]').popover({
				trigger: 'focus'
			});
		});
	</script>

@endsection
@endif