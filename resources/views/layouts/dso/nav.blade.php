<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('dso.home') }}">DSO Admin</a>
	<form action="{{ route('dso.search') }}" method="POST" class="w-100">
		{{ csrf_field() }}
		<input type="text" class="form-control form-control-dark" name="search" placeholder="What would you like to search for?" aria-label="Search" />
	</form>
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="{{ route('home') }}"><svg class="feather"><use xlink:href="{{ asset('/feather/feather-sprite.svg#arrow-left') }}"/></svg>Return to Main</a>
		</li>
	</ul>
</nav>

<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link{{ setActiveMenu('dso.home') }}" href="{{ route('dso.home') }}">
							<svg class="feather">
								<use xlink:href="{{ asset('/feather/feather-sprite.svg#home') }}"/>
							</svg>
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link{{ setActiveMenu('dso.logs') }}" href="{{ route('dso.logs') }}">
							<svg class="feather">
								<use xlink:href="{{ asset('/feather/feather-sprite.svg#list') }}"/>
							</svg>
							Logs
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link{{ setActiveMenu('dso.notes') }}" href="{{ route('dso.notes') }}">
							<svg class="feather">
								<use xlink:href="{{ asset('/feather/feather-sprite.svg#file-text') }}"/>
							</svg>
							Notes
						</a>
					</li>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
					<span>Reports</span>
					<a class="d-flex align-items-center text-muted" href="#">
						<svg class="feather">
							<use xlink:href="{{ asset('/feather/feather-sprite.svg#plus-circle') }}"/>
						</svg>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<form id="today-form" action="{{ route('dso.search') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="search" value="today" />
						<a class="nav-link" href="{{ route('dso.search') }}" onclick="document.getElementById('today-form').submit(); return false;">
							<svg class="feather">
							<use xlink:href="{{ asset('/feather/feather-sprite.svg#file-text') }}"/>
							</svg>
							Today
						</a>
						</form>
					</li>
					<li class="nav-item">
						<form id="yesterday-form" action="{{ route('dso.search') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="search" value="yesterday" />
						<a class="nav-link" href="{{ route('dso.search') }}" onclick="document.getElementById('yesterday-form').submit(); return false;">
							<svg class="feather">
							<use xlink:href="{{ asset('/feather/feather-sprite.svg#file-text') }}"/>
							</svg>
							Yesterday
						</a>
						</form>
					</li>
					<li class="nav-item">
						<form id="pictures-form" action="{{ route('dso.search') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="search" value="pictures" />
						<a class="nav-link" href="{{ route('dso.search') }}" onclick="document.getElementById('pictures-form').submit(); return false;">
							<svg class="feather">
							<use xlink:href="{{ asset('/feather/feather-sprite.svg#file-text') }}"/>
							</svg>
							All Board Pictures
						</a>
						</form>
					</li>
				</ul>
			</div>
		</nav>