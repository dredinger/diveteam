@extends ('layouts.dso.master')

@section ('title')
	Notes Administration - Add Notes
@endsection

@section ('content')

@include ('layouts.errors')

	<form action="{{ route('dso.notes.add') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="note"><strong>Add Note</strong></label>
			<textarea class="form-control" pattern="[0-9]*" name="name" id="note" required placeholder="Write down any notes here regarding the day..." rows="5">{{ old('note') }}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit Note</button>
		</div>

	</form>

@endsection