<div id="dbsfCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#dbsfCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#dbsfCarousel" data-slide-to="1"></li>
        <li data-target="#dbsfCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide img-fluid" src="{{ asset('/img/carousel/1.jpg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Welcome to the new (and improved!) DBSF's Dive Team website!</h1>
              <p>If you're here for some info, please check the links at the top of the page. If you have questions, please use the button below to be sent to the contact page.</p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('contact') }}" role="button">Contact</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide img-fluid" src="{{ asset('/img/carousel/2.jpg') }}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Who We Are</h1>
              <p>Have you ever wondered just what the DBSF dive team does? Click the button below to learn more!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide img-fluid" src="{{ asset('/img/carousel/3.jpg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>Become a volunteer diver today!</h1>
              <p>You can do more in the future by helping out today. Click the button below to get started!</p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('volunteer') }}" role="button">Volunteer Today!</a></p>
            </div>
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