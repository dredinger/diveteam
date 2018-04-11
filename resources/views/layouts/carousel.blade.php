<div id="dbsfCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#dbsfCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#dbsfCarousel" data-slide-to="1"></li>
		<li data-target="#dbsfCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="{{ asset('/img/carousel/1c.jpg') }}" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<h1>Welcome to the new (and improved!) Deep Blue Sea Foundation website!</h1>
				<p>If you're here for some info, please check the links at the top of the page. If you have questions about the Foundation, please use the button below to be sent to the information page.</p>
				<p><a class="btn btn-lg btn-primary" href="{{ route('volunteer') }}" role="button">Learn More</a></p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{ asset('/img/carousel/2c.jpg') }}" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
				<h1>Who We Are</h1>
				<p>Have you ever wondered just what the DBSF dive team does? Click the button below to learn more!</p>
				<p><a class="btn btn-lg btn-primary" href="{{ route('volunteer') }}" role="button">Learn More</a></p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{ asset('/img/carousel/3c.jpg') }}" alt="Third slide">
			<div class="carousel-caption d-none d-md-block text-right">
				<h1>Become a volunteer diver today!</h1>
				<p>You can do more in the future by helping out today. Click the button below to get started!</p>
				<p><a class="btn btn-lg btn-primary" href="{{ route('volunteer') }}" role="button">Volunteer Today!</a></p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#dbsfCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#dbsfCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>