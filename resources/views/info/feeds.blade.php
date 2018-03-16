@extends ('layouts.master')

@section ('title')
	Aquarium Dive Feed Schedule
@endsection

@section ('content')

	Below, you will find a list of days, and the exhibits that are fed as part of the dive conducted on that particular day.<br /><br />

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
					<td>Reservoir</td>
					<td>Under The Sea</td>
					<td>Shipwreck</td>
					<td>Under The Sea</td>
					<td>Under The Sea</td>
					<td>Shipwreck</td>
					<td>Shipwreck</td>
				</tr>
			</tbody>
		</table>

	@endsection