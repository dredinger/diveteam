<div id="dbsfCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#dbsfCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#dbsfCarousel" data-slide-to="1"></li>
		<li data-target="#dbsfCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block" sizes="(max-width: 1400px) 100vw, 1400px"
			srcset="
				{{ asset('/img/carousel/1/1_scale,w_200.jpg') }} 200w,
				{{ asset('/img/carousel/1/1_scale,w_403.jpg') }} 403w,
				{{ asset('/img/carousel/1/1_scale,w_551.jpg') }} 551w,
				{{ asset('/img/carousel/1/1_scale,w_681.jpg') }} 681w,
				{{ asset('/img/carousel/1/1_scale,w_784.jpg') }} 784w,
				{{ asset('/img/carousel/1/1_scale,w_886.jpg') }} 886w,
				{{ asset('/img/carousel/1/1_scale,w_981.jpg') }} 981w,
				{{ asset('/img/carousel/1/1_scale,w_1073.jpg') }} 1073w,
				{{ asset('/img/carousel/1/1_scale,w_1147.jpg') }} 1147w,
				{{ asset('/img/carousel/1/1_scale,w_1227.jpg') }} 1227w,
				{{ asset('/img/carousel/1/1_scale,w_1302.jpg') }} 1302w,
				{{ asset('/img/carousel/1/1_scale,w_1376.jpg') }} 1376w,
				{{ asset('/img/carousel/1/1_scale,w_1396.jpg') }} 1396w,
				{{ asset('/img/carousel/1/1_scale,w_1400.jpg') }} 1400w"
			src="{{ asset('/img/carousel/1/1_scale,w_1400.jpg') }}" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<h1>Welcome to the new (and improved!) Deep Blue Sea Foundation website!</h1>
				<p>If you're here for some info, please check the links at the top of the page. If you have questions about the Foundation, please use the button below to be sent to the information page.</p>
				<p><a class="btn btn-lg btn-primary" href="{{ route('volunteer') }}" role="button">Learn More</a></p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block" sizes="(max-width: 1400px) 100vw, 1400px"
			srcset="
				{{ asset('/img/carousel/2/2_scale,w_200.jpg') }} 200w,
				{{ asset('/img/carousel/2/2_scale,w_346.jpg') }} 346w,
				{{ asset('/img/carousel/2/2_scale,w_460.jpg') }} 460w,
				{{ asset('/img/carousel/2/2_scale,w_552.jpg') }} 552w,
				{{ asset('/img/carousel/2/2_scale,w_647.jpg') }} 647w,
				{{ asset('/img/carousel/2/2_scale,w_735.jpg') }} 735w,
				{{ asset('/img/carousel/2/2_scale,w_806.jpg') }} 806w,
				{{ asset('/img/carousel/2/2_scale,w_869.jpg') }} 869w,
				{{ asset('/img/carousel/2/2_scale,w_943.jpg') }} 943w,
				{{ asset('/img/carousel/2/2_scale,w_1012.jpg') }} 1012w,
				{{ asset('/img/carousel/2/2_scale,w_1072.jpg') }} 1072w,
				{{ asset('/img/carousel/2/2_scale,w_1132.jpg') }} 1132w,
				{{ asset('/img/carousel/2/2_scale,w_1191.jpg') }} 1191w,
				{{ asset('/img/carousel/2/2_scale,w_1251.jpg') }} 1251w,
				{{ asset('/img/carousel/2/2_scale,w_1304.jpg') }} 1304w,
				{{ asset('/img/carousel/2/2_scale,w_1361.jpg') }} 1361w,
				{{ asset('/img/carousel/2/2_scale,w_1398.jpg') }} 1398w,
				{{ asset('/img/carousel/2/2_scale,w_1400.jpg') }} 1400w"
			src="{{ asset('/img/carousel/2/2_scale,w_1400.jpg') }}" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
				<h1>Who We Are</h1>
				<p>Have you ever wondered just what the DBSF dive team does? Click the button below to learn more!</p>
				<p><a class="btn btn-lg btn-primary" href="{{ route('volunteer') }}" role="button">Learn More</a></p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block" sizes="(max-width: 1400px) 100vw, 1400px"
			srcset="
				{{ asset('/img/carousel/3/3_scale,w_200.jpg') }} 200w,
				{{ asset('/img/carousel/3/3_scale,w_369.jpg') }} 369w,
				{{ asset('/img/carousel/3/3_scale,w_497.jpg') }} 497w,
				{{ asset('/img/carousel/3/3_scale,w_606.jpg') }} 606w,
				{{ asset('/img/carousel/3/3_scale,w_701.jpg') }} 701w,
				{{ asset('/img/carousel/3/3_scale,w_787.jpg') }} 787w,
				{{ asset('/img/carousel/3/3_scale,w_875.jpg') }} 875w,
				{{ asset('/img/carousel/3/3_scale,w_956.jpg') }} 956w,
				{{ asset('/img/carousel/3/3_scale,w_1019.jpg') }} 1019w,
				{{ asset('/img/carousel/3/3_scale,w_1091.jpg') }} 1091w,
				{{ asset('/img/carousel/3/3_scale,w_1163.jpg') }} 1163w,
				{{ asset('/img/carousel/3/3_scale,w_1231.jpg') }} 1231w,
				{{ asset('/img/carousel/3/3_scale,w_1299.jpg') }} 1299w,
				{{ asset('/img/carousel/3/3_scale,w_1354.jpg') }} 1354w,
				{{ asset('/img/carousel/3/3_scale,w_1396.jpg') }} 1396w,
				{{ asset('/img/carousel/3/3_scale,w_1400.jpg') }} 1400w"
			src="{{ asset('/img/carousel/3/3_scale,w_1400.jpg') }}" alt="Third slide">
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