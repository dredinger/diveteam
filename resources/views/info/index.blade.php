@extends ('layouts.master')

@section ('title')
	Aquarium Information
@endsection

@section ('content')

	<div class="table-responsive">
		<table class="table table-hover">
			<tbody>
				<tr style="cursor: pointer;" onclick="window.location.href = '{{ route('trainers') }}';">
					<td><h4>View Academy Trainer Availability</h4></td>
				</tr>
				<tr style="cursor: pointer;" onclick="window.location.href = '{{ route('feeds') }}';">
					<td><h4>View Dive Feed Days and Locations</h4></td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection