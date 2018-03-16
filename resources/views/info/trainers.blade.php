@extends ('layouts.master')

@section ('title')
	Trainer Availability
@endsection

@section ('content')

	Below you will find Academy Trainers' general availability and their contact information. Please click on a name to show their contact info.<br /><br />

	<div class="table-responsive-xl">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
				@foreach ($days as $day)
					<th>{{ $day }}</th>
				@endforeach
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach ($days as $day)
					<td>
						@foreach ($trainers as $trainer)
							@for ($i = 0; $i < $trainer->availability->count(); $i++)
								@if ($trainer->availability[$i]->day_name == $day)
									<a tabindex="0" href="#" data-trigger="focus" 
									data-placement="top" data-toggle="popover" 
									data-html="true" title="<h3 class='p-3'><strong>{{ $trainer->name }}</strong></h3>" 
									data-content="<strong>Email:</strong> {{ $trainer->email }}<br /><strong>Phone:</strong> {{ phoneToReadable($trainer->phone) }}">
										{{ $trainer->name }}</a><br />
								@endif
							@endfor
						@endforeach
					</td>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>

@endsection