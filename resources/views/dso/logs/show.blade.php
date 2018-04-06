@extends ('layouts.dso.master')

@section ('title')
	Logs - Log #: {{ $log->id }}
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

	<ul class="list-group">
		<li class="list-group-item">RES Jumppack PSI: {{ $log->psi_res }}</li>
		<li class="list-group-item">UTS Jumppack PSI: {{ $log->psi_uts }}</li>
		<li class="list-group-item">SW Jumppack PSI: {{ $log->psi_sw }}</li>
		<li class="list-group-item">DR Jumppack PSI: {{ $log->psi_dr }}</li>
		<li class="list-group-item">{{ $log->psi_uts }}</li>
		<li class="list-group-item">{{ $log->psi_uts }}</li>
		<li class="list-group-item">{{ $log->psi_uts }}</li>
		<li class="list-group-item">{{ $log->psi_uts }}</li>
		<li class="list-group-item">{{ $log->psi_uts }}</li>
	</ul>

@endsection