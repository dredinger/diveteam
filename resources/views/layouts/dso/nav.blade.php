<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">DBSF DSO Admin</a>
	<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.828 9l6.071-6.071-1.414-1.414L0 10l.707.707 7.778 7.778 1.414-1.414L3.828 11H20V9H3.828z"/></svg> Return to Main</a>
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
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg>
							Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link{{ setActiveMenu('dso.logs') }}" href="{{ route('dso.logs') }}">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M1 4h2v2H1V4zm4 0h14v2H5V4zM1 9h2v2H1V9zm4 0h14v2H5V9zm-4 5h2v2H1v-2zm4 0h14v2H5v-2z"/></svg>
							Logs
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link{{ setActiveMenu('dso.notes') }}" href="{{ route('dso.notes') }}">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 18h12V6h-4V2H4v16zm-2 1V0h12l4 4v16H2v-1z"/></svg>
							Notes
						</a>
					</li>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
					<span>Saved reports</span>
					<a class="d-flex align-items-center text-muted" href="#">
						<span data-feather="plus-circle"></span>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Current month
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Last quarter
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Social engagement
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span data-feather="file-text"></span>
							Year-end sale
						</a>
					</li>
				</ul>
			</div>
		</nav>