<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Deep Blue Sea Foundation</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="/css/app.css" rel="stylesheet">
	</head>

	<body>

		@include ('layouts.nav')

		@if ($flash = session('message'))
			<div id="flash-message" class="alert alert-success" role="alert">
				{{ $flash }}
			</div>
		@endif

		@if ($flash = session('warning'))
			<div id="flash-message" class="alert alert-warning" role="alert">
				{{ $flash }}
			</div>
		@endif

		@if ($flash = session('error'))
			<div id="flash-message" class="alert alert-danger" role="alert">
				{{ $flash }}
			</div>
		@endif

		@yield ('header')

		<main role="main" class="container">
			@if (View::hasSection('title'))
				<div class="col-lg-12 text-center">
					<hr>
					<h2>
						@yield ('title')
					</h2>
					<hr style="padding-bottom: 1em;">
				</div>
			@endif

			@yield ('content')
			
		</main>

		@include ('layouts.footer')
		
	</body>
</html>