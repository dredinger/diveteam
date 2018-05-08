@extends ('layouts.dso.master')

@section ('title')
	Logs - Add Log
@endsection

@section ('extra-nav')
<div class="btn-toolbar mb-2 mb-md-0">
	<div class="btn-group mr-2">
		<a href="{{ route('dso.logs') }}" class="btn btn-sm btn-outline-secondary">View Logs</a>
	</div>
</div>
@endsection

@section ('content')

	@php
		$jpm_checked = (old('jumppack_masks') != null) ? ' checked' : '';
		$dis_checked = (old('disinfectants') != null) ? ' checked' : '';
		$ckl_checked = (old('sd_checklist') != null) ? ' checked' : '';
		$ath_checked = (old('aed_third') != null) ? ' checked' : '';
		$ase_checked = (old('aed_second') != null) ? ' checked' : '';
	@endphp

	@include ('layouts.errors')

	<form action="{{ route('dso.logs.add') }}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="psi_res"><strong>Reservoir PSI</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="psi_res" id="psi_res" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" step="100" value="{{ old('psi_res') }}" />
		</div>
		<div class="form-group">
			<label for="psi_uts"><strong>Under the Sea PSI</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="psi_uts" id="psi_uts" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" step="100" value="{{ old('psi_uts') }}" />
		</div>
		<div class="form-group">
			<label for="psi_sw"><strong>Shipwreck PSI</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="psi_sw" id="psi_sw" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" step="100" value="{{ old('psi_sw') }}" />
		</div>
		<div class="form-group">
			<label for="psi_dr"><strong>Dining Room PSI</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="psi_dr" id="psi_dr" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" step="100" value="{{ old('psi_dr') }}" />
		</div>
		<div class="form-group">
			<label for="psi_bank"><strong>Bank System PSI</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="psi_bank" id="psi_bank" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" step="100" value="{{ old('psi_bank') }}" />
		</div>
		<div class="form-group">
			<label for="jumppack_masks"><strong>All Jumppack Masks Available</strong></label>
			<input type="hidden" name="jumppack_masks" value="0" />
			<input type="checkbox" name="jumppack_masks" id="jumppack_masks" value="1" class="toggle toggle-ios" {{ $jpm_checked }}/>
				<label class="toggle-btn" for="jumppack_masks"></label>
		</div>
		<div class="form-group">
			<label for="disinfectants"><strong>All Disinfectants Checked</strong></label>
			<input type="hidden" name="disinfectants" value="0" />
			<input type="checkbox" name="disinfectants" id="disinfectants" value="1" class="toggle toggle-ios" {{ $dis_checked }}/>
				<label class="toggle-btn" for="disinfectants"></label>
		</div>
		<div class="form-group">
			<label for="sd_checklist"><strong>Safety Diver Checklist</strong></label>
			<input type="hidden" name="sd_checklist" value="0" />
			<input type="checkbox" name="sd_checklist" id="sd_checklist" value="1" class="toggle toggle-ios" {{ $ckl_checked }}/>
				<label class="toggle-btn" for="sd_checklist"></label>
		</div>
		<div class="form-group">
			<label for="aed_third"><strong>3rd Floor AED Status</strong></label>
			<input type="hidden" name="aed_third" value="0" />
			<input type="checkbox" name="aed_third" id="aed_third" value="1" class="toggle toggle-ios" {{ $ath_checked }}/>
				<label class="toggle-btn" for="aed_third"></label>
		</div>
		<div class="form-group">
			<label for="aed_second"><strong>2nd Floor AED Status</strong></label>
			<input type="hidden" name="aed_second" value="0" />
			<input type="checkbox" name="aed_second" id="aed_second" value="1" class="toggle toggle-ios" {{ $ase_checked }}/>
				<label class="toggle-btn" for="aed_second"></label>
		</div>
		<div class="form-group">
			<label for="psi_oxy_third"><strong>3rd Floor O<sub>2</sub> Kit PSI</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="psi_oxy_third" id="psi_oxy_third" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" step="100" value="{{ old('psi_oxy_third') }}" />
		</div>
		<div class="form-group">
			<label for="psi_oxy_second"><strong>2nd Floor O<sub>2</sub> Kit PSI</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="psi_oxy_second" id="psi_oxy_second" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" step="100" value="{{ old('psi_oxy_second') }}" />
		</div>
		@if (isDay(4))
		<div class="form-group">
			<label for="compressor_hours"><strong>Compressor Hours</strong></label>
			<input type="number" class="form-control" pattern="[0-9]*" name="compressor_hours" id="compressor_hours" required maxlength="4" placeholder="0" autocomplete="off" min="0" max="5000" value="{{ old('compressor_hours') }}" />
		</div>
		@endif
		@if (isDay(2))
		<div class="form-group">
			<label for="diveboard_picture_text" class="btn btn-primary btn-block btn-file">
				<strong>Dive Board Picture</strong>
				<input type="file" name="diveboard_picture" />
			</label>
			<input type="text" class="form-control" name="diveboard_picture_text" readonly />
		</div>
		@endif
		<div class="form-group">
			<label for="note_content"><strong>Notes</strong></label>
			<textarea class="form-control" rows="5" name="note_content" id="note_content" placeholder="Write down any notes for the day...">{{ old('note_content') }}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit Log</button>&nbsp;
			<a href="{{ route('dso.home') }}" class="btn btn-outline-danger">Cancel</a>
		</div>
	</form>

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
	});
	</script>
@endsection