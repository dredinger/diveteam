@extends ('layouts.dso.master')

@section ('title')
	Logs Administration - Log #: {{ $log->id }}
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