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
<form action="/dso/logs/add" method="POST" style="width: 100%;" {{ (isDay(6)) ? ' enctype="multipart/form-data"' : '' }}>
	{{ csrf_field() }}
	<div class="card mt-4 card-outline-primary">
		<div class="card-header card-primary card-inverse"><h2>Daily Operations Log</h2></div>
		<div class="card-block">
			<div class="input-group input-group-lg">
				<span class="input-group-addon w50 text-right"><strong>Reservoir PSI</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="psi_res" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>Under the Sea PSI</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="psi_uts" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>Shipwreck PSI</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="psi_sw" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>Dining Room PSI</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="psi_dr" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>Bank System PSI</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="psi_bank" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			<div class="form-group form-group-lg mt-4 row" style="width:100%">
				<label class="col-sm-6 control-label w50 text-right" for="jumppack_masks"><h4><strong>All Jumppack Masks Available</strong></h4></label>
				<div class="col-sm-6">
					<input type="checkbox" name="jumppack_masks" id="jumppack_masks" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Yes" data-off="No" data-size="medium" />
				</div>
			</div>
			<div class="form-group form-group-lg mt-4 row" style="width:100%">
				<label class="col-sm-6 control-label w50 text-right" for="disinfectants"><h4><strong>All Disinfectants Checked</strong></h4></label>
				<div class="col-sm-6">
					<input type="checkbox" name="disinfectants" id="disinfectants" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Yes" data-off="No" data-size="medium" />
				</div>
			</div>
			<div class="form-group form-group-lg mt-4 row" style="width:100%">
				<label class="col-sm-6 control-label w50 text-right" for="sd_checklist"><h4><strong>Safety Diver Checklist Complete</strong></h4></label>
				<div class="col-sm-6">
					<input type="checkbox" name="sd_checklist" id="sd_checklist" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Yes" data-off="No" data-size="medium" />
				</div>
			</div>
			<div class="form-group form-group-lg mt-4 row" style="width:100%">
				<label class="col-sm-6 control-label w50 text-right" for="aed"><h4><strong>All AEDs Green</strong></h4></label>
				<div class="col-sm-6">
					<input type="checkbox" name="aed" id="aed" value="1" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Yes" data-off="No" data-size="medium" />
				</div>
			</div>
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>3rd Floor O<sub>2</sub> Kit PSI</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="psi_oxy_third" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>2nd Floor O<sub>2</sub> Kit PSI</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="psi_oxy_second" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			@if (isDay(4))
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>Compressor Hours</strong></span>
				<input class="form-control" type="text" pattern="[0-9]*" name="compressor_hours" required maxlength="4" placeholder="0" autocomplete="off" />
			</div>
			@endif
			@if (isDay(6))
			<div class="input-group input-group-lg mt-4">
				<label class="input-group-btn w50">
					<span class="btn btn-info btn-sm text-right"><strong>Dive Board Checklist Picture</strong><input type="file" style="display:none;" /></span>
				</label>
				<input style="height:51px;" class="form-control" type="text" name="diveboard_picture" readonly />
			</div>
			@endif
			<div class="input-group input-group-lg mt-4">
				<span class="input-group-addon w50 text-right"><strong>Notes</strong></span>
				<textarea class="form-control" name="notes" id="notes" placeholder="Write down any notes for the day..."></textarea>
			</div>
		</div>
		<div class="card-footer card-outline-primary text-center">
			<button type="submit" class="btn btn-primary w50">Submit</button>
		</div>
	</div>
</form>

@include ('layouts.errors')

@endsection

@section ('extra')
<script>
$(function() {

// We can attach the `fileselect` event to all file inputs on the page
$(document).on('change', ':file', function() {
	var input = $(this),
	numFiles = input.get(0).files ? input.get(0).files.length : 1,
	label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	input.trigger('fileselect', [numFiles, label]);
});

// We can watch for our custom `fileselect` event like this
$(document).ready( function() {
	$(':file').on('fileselect', function(event, numFiles, label) {

		var input = $(this).parents('.input-group').find(':text'),
		log = numFiles > 1 ? numFiles + ' files selected' : label;

		if( input.length ) {
			input.val(log);
		} else {
			if( log ) alert(log);
		}

	});
});

})
</script>
@endsection