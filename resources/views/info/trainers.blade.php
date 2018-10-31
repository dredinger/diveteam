@extends ('layouts.master')

@section ('title')
	Trainer Availability
@endsection

@section ('content')

	Below you will find Academy Trainers' general availability and their contact information. Please click on a name to show their contact info. Alternatively, if you would like to contact ALL the trainers available on a given day, please look below the table and find a button to copy all the available trainers' email addresses.<br /><br />

	<div class="table-responsive-xl">
		<table class="table table-bordered table-striped table-light">
			<thead>
				<tr>
				@foreach ($days as $day)
					<th>{{ $day }}</th>
				@endforeach
				</tr>
			</thead>
			<tbody>
				<tr>
					@php
						$avail = [];
						$availableTrainers = '';
					@endphp
					@foreach ($days as $day)
					<td>
						@foreach ($trainers as $trainer)
							@for ($i = 0; $i < $trainer->availability->count(); $i++)
								@if ($trainer->availability[$i]->day_name == $day || $trainer->availability[$i]->day_name === 'ALL')
									@php
										$avail[$day][] = $trainer->email;
									@endphp
									<a tabindex="0" href="#" data-trigger="focus" data-placement="top" data-toggle="popover" data-html="true" title="{{ $trainer->name }}" data-content="<strong>Email:</strong> {{ $trainer->email }}<br /><strong>Phone:</strong> {{ phoneToReadable($trainer->phone) }}">
										{{ $trainer->name }}</a><br />
								@endif
							@endfor
						@endforeach
					</td>
					@endforeach
				</tr>
				<tr>
					@foreach ($days as $day)
					@foreach ($avail[$day] as $a)
						@php 
						$availableTrainers .= $a . '; ';
						@endphp
					@endforeach
					<td>
						<input type="text" id="availableTrainers{{ $day }}" value="{{ $availableTrainers }}" size="1"/><button onclick="copyToClipboard('availableTrainers{{ $day }}')">Copy All Emails</button>
					</td>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>

@endsection

@section ('extra')

	<script type="text/javascript">
		function copyToClipboard(element) {
			var copyText = document.getElementById(element);
			copyText.select();
			document.execCommand("copy");
		}
	</script>

@endsection