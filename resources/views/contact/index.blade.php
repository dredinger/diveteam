@extends ('layouts.master')

@section ('title')
	Contact
@endsection

@section ('content')

	<div class="table-responsive-xl">
		<table class="table table-bordered table-hover table-striped table-light">
			<thead>
				<tr>
					<th>Name</th>
					<th id="title">Title</th>
					<th>Phone</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($managers as $manager)
				<tr>
					<td>{{ $manager->name }}</td>
					<td id="title">{{ $manager->title }}</td>
					<td><a href="tel:{{ $manager->phone }}">{{ phoneToReadable($manager->phone) }}</a></td>
					<td><a href="mailto:{{ $manager->email }}">{{ $manager->email }}</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection