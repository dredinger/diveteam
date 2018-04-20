@extends ('layouts.master')

@section ('title')
	Downloads
@endsection

@section ('content')
	@if ($downloads->count() == 0)
		<tr>
			<td colspan="2">No downloads exist.</td>
		</tr>
	@else
		<div class="card">
			<ul class="list-group list-group-flush">
			@foreach ($downloads as $download)
			<li class="list-group-item">
				{{ $download->name }}
				<span class="float-right">
					<a alt="View" title="View" id="View.{{ $download->id }}" href="/downloads/{{ $download->id }}">View
						<svg class="feather">
							<use xlink:href="{{ asset('/feather/feather-sprite.svg#eye') }}"/>
						</svg></a>
					<a alt="Download" title="Download" id="Download.{{ $download->id }}" href="/downloads/{{ $download->id }}/download">Download
						<svg class="feather">
							<use xlink:href="{{ asset('/feather/feather-sprite.svg#download-cloud') }}"/>
						</svg></a>
				</span>
			</li>
			@endforeach
			</ul>
		</div>
	@endif

@endsection