@extends ('layouts.master')

@section ('title')
	DSO Administration
@endsection

@section ('content')

<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<th class="text-right">Options</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td contenteditable="false">Logs</td>
				<td class="text-right">
				<h5>
					<a class="badge badge-success" id="View" href="/dso/logs/add">Add New</a>
					<span id="divide"></span>
					<a class="badge badge-primary" id="View" href="/dso/logs/all">View All</a>
				</h5>
				</td>
			</tr>
			<tr>
				<td contenteditable="false">Notes</td>
				<td class="text-right">
				<h5>
					<a class="badge badge-success" id="View" href="/dso/notes/add">Add New</a>
					<span id="divide"></span>
					<a class="badge badge-primary" id="View" href="/dso/logs/all">View All</a>
				</h5>
				</td>
			</tr>
		</tbody>
	</table>
</div>

@endsection