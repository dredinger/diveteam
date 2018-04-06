@extends ('layouts.dso.master')

@section ('title')
	Notes - Create Note
@endsection

@section ('extra-nav')
<div class="btn-toolbar mb-2 mb-md-0">
	<div class="btn-group mr-2">
		<a href="{{ route('dso.notes') }}" class="btn btn-sm btn-outline-secondary">View Notes</a>
	</div>
</div>
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
			<button type="submit" class="btn btn-primary">Submit Note</button>&nbsp;
			<a href="{{ route('dso.home') }}" class="btn btn-outline-danger">Cancel</a>
		</div>

	</form>

@endsection