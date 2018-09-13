@extends ('layouts.master')

@section ('title')
	Begin Your Volunteer Adventure!
@endsection

@section ('content')

	<div class="card card-inverse card-primary lead text-uppercase text-center font-weight-bold">
		<div class="card-block p-4">The mission of the Deep Blue Sea Foundation is to create experiences that inspire our guests to discover, explore, enjoy, and protect our aquatic world.</div>
	</div>
	
	<div class="my-4"></div>

	<dl class="row">
		<dt class="col-sm-3">What is the Deep Blue Sea Foundation?</dt>
		<dd class="col-sm-9">The Deep Blue Sea Foundation is a non-profit organization that supports the volunteer program at Landry's Downtown Aquarium Denver.</dd>
		<dd class="col-sm-9 offset-sm-3">The Aquarium has approximately 106,500 square feet of exhibit space, over one million gallons of water and approximately 500 species of fish, birds, and mammals.</dd>
		
		<dt class="col-sm-3 pt-2 border-top">Who is the Deep Blue Sea Foundation?</dt>
		<dd class="col-sm-9 pt-2 border-top">We have over 200 volunteers in several areas of the Aquarium. Our volunteers run the gamut from ages 17 to 85 and include aspiring marine biologists, ocean-starved divers, and people who just love the Aquarium! About half of the volunteers participate as Aquarium Guides and greet our guests along the exhibit paths. The other half are in a variety of behind the scenes positions working with our life sciences, education, and adminstrative staff.</dd>
		<dd class="col-sm-9 offset-sm-3">The Aquarium has paid staff members in several departments including aquarists, trainers, life support, education, guest services, security, sales, housekeeping, and the restaurant.</dd>
		<dd class="col-sm-9 offset-sm-3">The Aquarium has been owned by Landry's Restaurants, Inc. since March of 2003. Landry's owns many restaurants nationwide including local restaurants such as Saltgrass Steak House, Simms Steakhouse, Oceanaire Seafood Room, and Chart House. Landry's also owns a Downtown Aquarium that opened in Houston in 2003. Previously operated as a private non-profit aquarium known as Ocean Journey, the Downtown Aquarium Denver is now part of a larger for-profit restaurant/entertainment company.</dd>

		<dt class="col-sm-3 pt-2 border-top">What do the volunteers do?</dt>
		<dd class="col-sm-9 pt-2 border-top">Volunteer Aquarium Guides ARE the educational link between guests and our exhibits.</dd>
		<dd class="col-sm-9 offset-sm-3">Behind the scenes volunteers support the staff in the maintenance of our exhibits and the care of our animals.</dd>
		<dd class="col-sm-9 offset-sm-3">Aquarium guides work once a week and life science volunteers can commit to a weekly or every other week commitment of a 3-4 hour shift. The minimum commitment is for 6 months; 1 year for divers.</dd>

		<dt class="col-sm-3 pt-2 border-top">Volunteer Training</dt>
		<dd class="col-sm-9 pt-2 border-top">Most of the training is on-the-job.</dd>
		<dd class="col-sm-9 offset-sm-3">Aquarium guides will mentor with experienced journey guides on each station and participate in a 4-hour training session that is held once a month.</dd>
		<dd class="col-sm-9 offset-sm-3">Behind the scenes volunteers will be trained on-the-job by a staff member or an experienced volunteer.</dd>

		<dt class="col-sm-3 pt-2 border-top">What's In It For Me?</dt>
		<dd class="col-sm-9 pt-2 border-top">Other than being a fun place to learn fascinating things about the animal collection, the Deep Blue Sea Foundation provides additional benefits to the volunteers.</dd>
		<dd class="col-sm-9 offset-sm-3">Volunteers are admitted for free anytime during business hours.</dd>
		<dd class="col-sm-9 offset-sm-3">Educational sessions, called enrichments, are held at minimum 3 times a year and are available to all Foundation volunteers.</dd>
		<dd class="col-sm-9 offset-sm-3">Free parking.</dd>
		<dd class="col-sm-9 offset-sm-3">Free passes, upon approval, for friends and family members.</dd>
		<dd class="col-sm-9 offset-sm-3">Backstage tours, upon approval, for friends and family members.</dd>

		<dt class="col-sm-3 pt-2 border-top">Uniforms</dt>
		<dd class="col-sm-9 pt-2 border-top">Aquarium guides wear a white polo shirt (provided for you at orientation) with the Deep Blue Sea Foundation logo.</dd>
		<dd class="col-sm-9 offset-sm-3">Behind the scenes volunteers wear a white t-shirt, provided for you at orientation.</dd>
		<dd class="col-sm-9 offset-sm-3">All volunteers must provide their own khaki pants or shorts. (Long skirts are also permitted for Aquarium Guides.)</dd>
		<dd class="col-sm-9 offset-sm-3">Comfortable, closed-toe, water resistant, non-skid footwear is recommended for Aquarium Guides, and required for Behind the Scenes volunteers.</dd>

		<dt class="col-sm-3 pt-2 border-top">Getting Signed Up</dt>
		<dd class="col-sm-9 pt-2 border-top">Once you have decided on a position, call one of our Volunteer Coordinators at <a href="tel:3035614474">{{ phoneToReadable('3035614474') }}</a> or <a href="tel:3035614413">{{ phoneToReadable('3035614413') }}</a> to set up an interview. All volunteers are interviewed and background checked before starting. A drug test is also required. Keep in mind, some positions have a waitlist and you may not be able to start that position right away. Call immediately to make an appointment for an interview.</dd>
		<dd class="col-sm-9 offset-sm-3">Volunteer divers will receive another packet at the diver interview that includes a dive physical form. The physical must be filled out by your doctor on our form. We also require current CPR certification for divers. Once the interview, background check, physical and CPR certification is complete, all divers are required to pass a swim test and checkout dive with our Dive Safety Officer, or their designee.</dd>
		<dd class="col-sm-9 offset-sm-3">After you are approved and placed, all volunteers participate in an orientation session and pay a one-time volunteer fee; Divers ($50), others ($25). The volunteer fee covers the cost of your uniform shirt, security badge, and training manual; dive candidates receive additional testing and training.</dd>
		
		<dt class="col-sm-3 pt-2 border-top">More Information</dt>
		<dd class="col-sm-9 pt-2 border-top"><a href="{{ route('volunteer.assistant') }}">Animal Care Assistant</a></dd>
		<dd class="col-sm-9 offset-sm-3"><a href="{{ route('volunteer.guide') }}">Aquarium Guide</a></dd>
		<dd class="col-sm-9 offset-sm-3"><a href="{{ route('volunteer.diver') }}">Diver</a></dd>

		<dt class="col-sm-3 pt-2 border-top">Apply Now!</dt>
		<dd class="col-sm-9 pt-2 border-top"><a href="{{ route('volunteer.apply') }}">Apply Now!</a></dd>
	</dl>

@endsection