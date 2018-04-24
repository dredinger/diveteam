@extends ('layouts.dso.master')

@section ('title')
	Dashboard
@endsection

@section ('extra-nav')
<div class="btn-toolbar mb-2 mb-md-0">
	<div class="btn-group mr-2">
		<a href="{{ route('dso.logs.add') }}" class="btn btn-sm btn-outline-secondary">Add Daily Log</a>
		<a href="{{ route('dso.notes.add') }}" class="btn btn-sm btn-outline-secondary">Add New Note</a>
	</div>
</div>
@endsection

@section ('content')
	
	<div class="row">
		<div class="col">
		<h5 class="mb-4">Latest Logs</h5>
		<div class="card-deck mb-5">
		@foreach ($logs as $log)
			@php
				$verify = verifyDsoChecks($log);
				if (count($verify) > 0) {
					$status = 'danger';
					$svg = 'x';
				} else {
					$status = 'success';
					$svg = 'check';
				}
			@endphp
			<div class="card border-{{ $status }}">
				<a href="{{ route('dso.logs.view', ['id' => $log->id]) }}">
				<div class="card-header">{{ $log->created_at->toDayDateTimeString() }}</div>
				<div class="card-body">
					<p class="card-text text-center">
						<svg class="feather feather-normal feather-{{ $status }}"><use xlink:href="{{ asset('/feather/feather-sprite.svg#' . $svg . '-circle') }}"/></svg>
					</p>
					<small class="float-right text-muted">[ {{ $log->id }} ]</small>
				</div>
				<div class="card-footer">
					<p class="card-text"><small class="text-muted">Last updated {{ $log->updated_at->diffForHumans() }}</small></p>
				</div>
				</a>
			</div>
		@endforeach
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
		<h5 class="mb-4">Latest Notes</h5>
		<div class="card-deck mb-5">
		@foreach ($notes as $note)
			<div class="card">
				<div class="card-header">{{ $note->created_at->toDayDateTimeString() }}</div>
				<div class="card-body">
					<p class="card-text text-center">
						{{ $note->content }}
					</p>
					<small class="float-right text-muted">[ {{ $note->id }} ]</small>
				</div>
				<div class="card-footer">
					<p class="card-text"><small class="text-muted">Last updated {{ $note->updated_at->diffForHumans() }}</small></p>
				</div>
			</div>
		@endforeach
		</div>
		</div>
	</div>
@endsection