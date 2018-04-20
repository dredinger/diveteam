@extends ('layouts.master')

@section ('title')
	Contact Us
@endsection

@section ('content')

	<form class="form-horizontal" role="form" method="POST" action="{{ route('volunteer.contact') }}">
		{{ csrf_field() }}

		<div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
			<label for="name" class="form-control-label">Full Name</label>

			<div class="col-md-12">
				<input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autofocus />
			</div>
		</div>

		<div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
			<label for="email" class="form-control-label">Email Address</label>

			<div class="col-md-12">
				<input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required />
			</div>
		</div>

		<div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
			<label for="position" class="form-control-label">Position Applying For</label>

			<div class="col-md-12">
				<input id="position" list="positions" class="form-control form-control-lg" name="position"value="{{ old('position') }}" required />
				<datalist id="positions">
					<option value="Aquarium Guide">
					<option value="Animal Assistant">
					<option value="Diver">
				</datalist>
			</div>
		</div>

		<div class="form-group{{ $errors->has('message') ? ' has-danger' : '' }}">
			<label for="message" class="form-control-label">Message</label>

			<div class="col-md-12">
				<textarea id="message" class="form-control form-control-lg" rows="5" name="message" required>{{ old('message') }}</textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">
					Contact Us!
				</button>
			</div>
		</div>
	</form>

	@include ('layouts.errors')

@endsection