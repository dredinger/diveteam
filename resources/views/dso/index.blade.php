@extends ('layouts.dso.master')

@section ('title')
	Dashboard
@endsection

@section ('content')

	<div class="card-deck mb-5">
	@foreach ($logs as $log)
		@php
			if (!verifyDsoChecks($log)) {
				$border = 'danger';
				$status = 'x';
			} else {
				$border = 'success';
				$status = 'check';
			}
		@endphp
		<div class="card border-{{ $border }}">
			<a href="{{ route('dso.logs.view', ['id' => $log->id]) }}">
			<div class="card-header">Log #{{ $log->id }}</div>
			<div class="card-body">
				<p class="card-text text-center">
					<svg class="feather"><use xlink:href="{{ asset('/feather/feather-sprite.svg#' . $status . '-circle') }}"/></svg>
				</p>
			</div>
			<div class="card-footer">
				<p class="card-text"><small class="text-muted">Last updated {{ $log->updated_at->diffForHumans() }}</small></p>
			</div>
			</a>
		</div>
	@endforeach
	</div>
@endsection