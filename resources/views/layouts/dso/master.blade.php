<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Deep Blue Sea Foundation DSO Administration</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/dso/app.css" rel="stylesheet">
</head>

<body>

	@include ('layouts.dso.nav')

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
			@if (View::hasSection('title'))
			<h1 class="h2">
				@yield ('title')
			</h1>
			@endif
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<button class="btn btn-sm btn-outline-secondary">Share</button>
					<button class="btn btn-sm btn-outline-secondary">Export</button>
				</div>
				<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
					This week
				</button>
			</div>
		</div>

		@yield ('content')

	</main>

	@include ('layouts.dso.footer')
		
	</body>
</html>
