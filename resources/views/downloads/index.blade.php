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
				@foreach ($downloads as $download)
				<tr>
					<td contenteditable="false">{{ $download->name }}</td>
					<td class="text-right"><a id="View.{{ $download->id }}" href="/downloads/{{ $download->id }}/view">View</a><span id="divide">|</span><a id="Download.{{ $download->id }}" href="/downloads/{{ $download->id }}/download">Download</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection