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

<form action="/dso/logs/add" method="POST">
<div class="panel panel-primary">
<div class="panel-heading">Daily Operations Log</div>
<div class="panel-body">
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Reservoir PSI</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" pattern="[0-9]*" name="psi_res" required maxlength="4" placeholder="0" autocomplete="off" />
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Under the Sea PSI</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" pattern="[0-9]*" name="psi_res" required maxlength="4" placeholder="0" autocomplete="off" />
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Shipwreck PSI</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" pattern="[0-9]*" name="psi_res" required maxlength="4" placeholder="0" autocomplete="off" />
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Dining Room PSI</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" pattern="[0-9]*" name="psi_res" required maxlength="4" placeholder="0" autocomplete="off" />
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label class="col-sm-6 control-label">Bank System PSI</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" pattern="[0-9]*" name="psi_res" required maxlength="4" placeholder="0" autocomplete="off" />
		</div>
	</div>

</div>
</div>

@endsection