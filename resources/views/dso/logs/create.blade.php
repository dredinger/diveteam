@extends ('layouts.master')

@section ('title')
DSO Administration
@endsection

@section ('content')

@include ('layouts.errors')

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
<form action="/dso/logs/add" method="POST" style="width: 100%;" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="card mt-4 card-outline-primary">
		<div class="card-header card-primary card-inverse"><h2>Daily Operations Log</h2></div>
		<div class="card-block">
			<div class="form-group row">
				<label for="psi_res" class="col-lg-3 col-form-label"><strong>Reservoir PSI</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="psi_res" id="psi_res" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			<div class="form-group row">
				<label for="psi_uts" class="col-lg-3 col-form-label"><strong>Under the Sea PSI</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="psi_uts" id="psi_uts" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			<div class="form-group row">
				<label for="psi_res" class="col-lg-3 col-form-label"><strong>Shipwreck PSI</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="psi_sw" id="psi_sw" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			<div class="form-group row">
				<label for="psi_dr" class="col-lg-3 col-form-label"><strong>Dining Room PSI</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="psi_dr" id="psi_dr" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			<div class="form-group row">
				<label for="psi_bank" class="col-lg-3 col-form-label"><strong>Bank System PSI</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="psi_bank" id="psi_bank" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			<div class="form-group row">
				<label for="jumppack_masks" class="col-lg-3 col-form-label"><strong>All Jumppack Masks Available</strong></label>
				<div class="col-lg-9">
					<input type="checkbox" name="jumppack_masks" id="jumppack_masks" value="1" class="toggle toggle-ios" />
					<label class="toggle-btn" for="jumppack_masks"></label>
				</div>
			</div>
			<div class="form-group row">
				<label for="disinfectants" class="col-lg-3 col-form-label"><strong>All Disinfectants Checked</strong></label>
				<div class="col-lg-9">
					<input type="checkbox" name="disinfectants" id="disinfectants" value="1" class="toggle toggle-ios" />
					<label class="toggle-btn" for="disinfectants"></label>
				</div>
			</div>
			<div class="form-group row">
				<label for="sd_checklist" class="col-lg-3 col-form-label"><strong>Safety Diver Checklist</strong></label>
				<div class="col-lg-9">
					<input type="checkbox" name="sd_checklist" id="sd_checklist" value="1" class="toggle toggle-ios" />
					<label class="toggle-btn" for="sd_checklist"></label>
				</div>
			</div>
			<div class="form-group row">
				<label for="aed" class="col-lg-3 col-form-label"><strong>All Disinfectants Checked</strong></label>
				<div class="col-lg-9">
					<input type="checkbox" name="aed" id="aed" value="1" class="toggle toggle-ios" />
					<label class="toggle-btn" for="aed"></label>
				</div>
			</div>
			<div class="form-group row">
				<label for="psi_oxy_third" class="col-lg-3 col-form-label"><strong>3rd Floor O<sub>2</sub> Kit PSI</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="psi_oxy_third" id="psi_oxy_third" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			<div class="form-group row">
				<label for="psi_oxy_second" class="col-lg-3 col-form-label"><strong>2nd Floor O<sub>2</sub> Kit PSI</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="psi_oxy_second" id="psi_oxy_second" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			@if (isDay(5))
			<div class="form-group row">
				<label for="compressor_hours" class="col-lg-3 col-form-label"><strong>Compressor Hours</strong></label>
				<div class="col-lg-9">
					<input class="form-control" type="text" pattern="[0-9]*" name="compressor_hours" required maxlength="4" placeholder="0" autocomplete="off" />
				</div>
			</div>
			@endif
			@if (isDay(5))
			<div class="form-group row">
				<label for="diveboard_picture_text" class="col-lg-3 col-form-label btn btn-primary btn-block btn-file">
					<strong>Dive Board Picture</strong>
					<input type="file" name="diveboard_picture" />
				</label>
				<div class="col-lg-9">
					<input class="form-control" type="text" name="diveboard_picture_text" readonly />
				</div>
			</div>
			@endif
			<div class="form-group row">
				<label for="compressor_hours" class="col-lg-3 col-form-label"><strong>Compressor Hours</strong></label>
				<div class="col-lg-9">
					<textarea class="form-control" name="notes" id="notes" placeholder="Write down any notes for the day..."></textarea>
				</div>
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

$(document).on('change', ':file', function() {
	var input = $(this),
	numFiles = input.get(0).files ? input.get(0).files.length : 1,
	label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
	$(':file').on('fileselect', function(event, numFiles, label) {

		var input = $(this).parents('.form-group').find(':text'),
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