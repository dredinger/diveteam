@extends ('layouts.master')

@section ('title')
	Downloads
@endsection

@section ('content')

	<div class="table-responsive">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>File</th>
					<th class="text-right">Options</th>
				</tr>
			</thead>
			<tbody>
			@if ($downloads->count() == 0)
				<tr>
					<td colspan="2">No downloads exist.</td>
				</tr>
			@else
				@foreach ($downloads as $download)
				<tr>
					<td contenteditable="false">{{ $download->name }}</td>
					<td class="text-right"><a id="View.{{ $download->id }}" href="/downloads/{{ $download->id }}">View</a><span id="divide">|</span><a id="Download.{{ $download->id }}" href="/downloads/{{ $download->id }}/download">Download</a></td>
				</tr>
				@endforeach
			@endif
			</tbody>
		</table>
	</div>

@endsection