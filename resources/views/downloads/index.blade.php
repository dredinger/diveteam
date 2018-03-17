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
					<a alt="View" title="View" id="View.{{ $download->id }}" href="/downloads/{{ $download->id }}">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
						</svg></a>
					<a alt="Download" title="Download" id="Download.{{ $download->id }}" href="/downloads/{{ $download->id }}/download">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
							<path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
						</svg>
					</a>
				</span>
			</li>
			@endforeach
			</ul>
		</div>
	@endif

@endsection