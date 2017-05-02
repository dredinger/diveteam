<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="{{ route('home') }}">Deep Blue Sea Foundation</a>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto justify-content-end w-100">
			<li class="nav-item">
				<a class="nav-link" href="{{ route('home') }}">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('downloads') }}">DOWNLOADS</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">AQUARIUM INFO</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="{{ route('trainers') }}">Academy Trainer Availability</a>
					<a class="dropdown-item" href="{{ route('divefeed') }}">Dive Feeding Schedule</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOG &amp; SCHEDULE</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="http://tdad.diveaaus.com">Dive Log</a>
					<a class="dropdown-item" href="http://whentowork.com">WhenToWork</a>
				</div>
			</li>
		</ul>
	</div>
</nav>