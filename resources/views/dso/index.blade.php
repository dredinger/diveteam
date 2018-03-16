@extends ('layouts.dso.master')

@section ('title')
	DSO Administration
@endsection

@section ('content')

<div class="table-responsive-xl">
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<th class="text-right">Options</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Logs</td>
				<td class="text-right">
				<h5>
					<a class="badge badge-success" id="View" href="{{ route('dso.logs.add') }}">Add New</a>
					<span id="divide"></span>
					<a class="badge badge-primary" id="View" href="{{ route('dso.logs') }}">View All</a>
				</h5>
				</td>
			</tr>
			<tr>
				<td>Notes</td>
				<td class="text-right">
				<h5>
					<a class="badge badge-success" id="View" href="{{ route('dso.notes') }}">Add New</a>
					<span id="divide"></span>
					<a class="badge badge-primary" id="View" href="{{ route('dso.notes') }}">View All</a>
				</h5>
				</td>
			</tr>
		</tbody>
	</table>
</div>

@endsection