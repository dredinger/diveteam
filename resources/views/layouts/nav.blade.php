<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">
			<img src="{{ asset('/img/logo-sm-c.png') }}" class="pr-2" />DBSF
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar navbar-nav ml-auto">
			@if (Auth::check())
			<li class="nav-item">
				<a class="nav-link{{ setActiveMenu('home') }} py-3" href="{{ route('home') }}">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link{{ setActiveMenu('downloads') }} py-3" href="{{ route('downloads') }}">Downloads</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link{{ setActiveMenu('info.home') }} py-3 dropdown-toggle" href="#" id="navbarDropdownInfo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aquarium Info</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownInfo">
					<a class="dropdown-item" href="{{ route('info.trainers') }}">Academy Trainer Availability</a>
					<a class="dropdown-item" href="{{ route('info.feeds') }}">Dive Feeding Schedule</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link{{ setActiveMenu('contact') }} py-3" href="{{ route('contact') }}">Contact</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link py-3 dropdown-toggle" href="#" id="navbarDropdownLogSchedule" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log &amp; Schedule</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownLogSchedule">
					<a class="dropdown-item" target="_blank" href="http://tdad.diveaaus.com">Dive Log</a>
					<a class="dropdown-item" target="_blank" href="http://whentowork.com">WhenToWork</a>
				</div>
			</li>
		</ul>
		<ul class="navbar navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link py-3" href="{{ route('logout') }}"
				onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
				Logout
			</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</li>
		@else
		<li class="nav-item">
			<a class="nav-link{{ setActiveMenu('volunteer.home') }} py-3" href="{{ route('volunteer.home') }}">Volunteer Information</a>
		</li>
	</ul>
	<ul class="navbar navbar-nav ml-auto">
		<li class="nav-item">
			<a rel="nofollow" class="nav-link{{ setActiveMenu('login') }} py-3" href="{{ route('login') }}">Login</a>
		</li>
		@endif
	</ul>
</div>
</div>
</nav>