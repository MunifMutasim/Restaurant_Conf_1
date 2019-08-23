@extends('layouts.frontlayout.master1')

@section('banner_area')
<section class="home-banner-area relative">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="home-banner-content col-lg-5">
                <h1>Rooftop</h1>
                <hr>
                <p>A Fine Dinning Restaurant</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('left_right_and_banner_icon')
<div class="go-down">
    <a href="#menu_area">
        <img class="go-down-img" src="{{ asset('frontend') }}/img/go-down.png" alt="">
    </a>
</div>
<div class="fixed-view-menu">
    <p>
        <a href="menu.html">view menu</a>
    </p>
</div>
<div class="fixed-book-table">
    <p>
        <a href="index.html">book a table</a>
    </p>
</div>
@endsection

@section('content1')
<!--================ Menu Area =================-->
<section class="menu-area" id="menu_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="section-title relative">
						<h1>
							Daily Food <br>
							Courses <br>
							with Drinks
						</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
						<a href="#" class="primary-btn text-uppercase">See Full Menu</a>
					</div>
				</div>
				<div class="col-lg-7 col-md-7">
					<div class="menu-list">
						<div class="single-menu">
							<h3>Appetizer</h3>
							<ul class="list">
								<li>
									<p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
									<p>(French bread baguette, cooked ham, potato salad)</p>
								</li>
								<li>
									<p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
									<p>(French bread baguette, cooked ham, potato salad)</p>
								</li>
							</ul>
						</div>

						<div class="single-menu">
							<h3>Main Courses</h3>
							<ul class="list">
								<li>
									<p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
									<p>(French bread baguette, cooked ham, potato salad)</p>
								</li>
								<li>
									<p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
									<p>(French bread baguette, cooked ham, potato salad)</p>
								</li>
							</ul>
						</div>

						<div class="single-menu">
							<h3>Drinks & Juices</h3>
							<ul class="list">
								<li>
									<p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
									<p>(French bread baguette, cooked ham, potato salad)</p>
								</li>
								<li>
									<p class="menu-item">Ham & Potato Sandwiches ........... <span>$25.00</span></p>
									<p>(French bread baguette, cooked ham, potato salad)</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Menu Area =================-->

	<!--================ Gallery Area =================-->
	<section class="gallery-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-5 col-sm-6">
					<div class="single-gallery mt--480">
						<div class="overlay"></div>
						<figure>
							<img src="{{ asset('frontend') }}/img/gallery/g1.jpg" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{ asset('frontend') }}/img/gallery/g1.jpg" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-gallery">
						<div class="overlay"></div>
						<figure>
							<img src="{{ asset('frontend') }}/img/gallery/g2.jpg" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{ asset('frontend') }}/img/gallery/g2.jpg" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-5 col-sm-6">
					<div class="single-gallery mt--280">
						<div class="overlay"></div>
						<figure>
							<img src="{{ asset('frontend') }}/img/gallery/g3.jpg" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{ asset('frontend') }}/img/gallery/g3.jpg" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-gallery">
						<div class="overlay"></div>
						<figure>
							<img src="{{ asset('frontend') }}/img/gallery/g4.jpg" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{ asset('frontend') }}/img/gallery/g4.jpg" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Gallery Area =================-->

	<!--================ Reservation Area =================-->
	<section class="reservation-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<form class="booking-form" id="myForm" action="">
						<div class="row">
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="event-name" placeholder="Event Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text">
							</div>

							<div class="input-group col-lg-6 mb-20">
								<input id="event_date" class="form-control datepicker" placeholder="Event Date" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Event Date'" class="form-control" required="" type="text">
								<span class="input-group-append">
									<button class="btn btn-outline-secondary border-left-0 border-0" type="button">
										<i class="fa fa-calendar reservation-calendar"></i>
									</button>
								</span>
							</div>

							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="nice-select app-select form-control " tabindex="0">
									<span class="current">Event Time</span>
									<ul class="list">
										<li data-value="Project you want to donate" data-display="Project you want to donate" class="option selected">Meal
											Preferences</li>
										<li data-value="1" class="option">05pm</li>
										<li data-value="2" class="option">08pm</li>
										<li data-value="3" class="option">09pm</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="nice-select app-select form-control " tabindex="0">
									<span class="current">Number of guests</span>
									<ul class="list">
										<li data-value="Project you want to donate" data-display="Project you want to donate" class="option selected">Number
											of guests</li>
										<li data-value="1" class="option">Number of guests 1</li>
										<li data-value="2" class="option">Number of guests 2</li>
										<li data-value="3" class="option">Number of guests 3</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 d-flex flex-column mb-20">
								<input name="budget" placeholder="Budget" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Budget'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="contact-name" placeholder="Contact Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="email-address" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
								 class="form-control" required="" type="email">
							</div>
							<div class="col-lg-12 d-flex flex-column mb-20">
								<input name="phone-number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								 class="form-control" required="" type="text">
							</div>
							<div class="col-lg-12 d-flex flex-column">
								<textarea class="form-control" name="post-message" placeholder="Post a message" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Post a message'" required=""></textarea>
							</div>

							<div class="col-lg-12 d-flex justify-content-end">
								<button class="primary-btn dark mt-30 text-uppercase">Send Request</button>
							</div>
							<div class="alert-msg"></div>
						</div>
					</form>
				</div>
				<div class="offset-lg-1 col-lg-4 col-md-6">
					<div class="section-title relative">
						<h1>
							Book a <br>
							Table or <br>
							Rooms for <br>
							private <br>
							dining
						</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Reservation Area =================-->

	<!--================ Chefs Quotes Area =================-->
	<section class="chefs-quotes-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							Chef’s <br>
							Quotes
						</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
							enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quotes
						</p>
						<img src="{{ asset('frontend') }}/img/signature.png" class="img-fluid" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-6">
					<div class="mt--120">
						<img class="chef-img img-fluid" src="{{ asset('frontend') }}/img/chefs-quotes.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Chefs Quotes Area =================-->

	<!--================ Start Call To Action Area =================-->
	<section class="container section-gap-top">
		<div class="callto-action-area relative">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12 p-0">
					<div class="cta-owl owl-carousel">
						<div class="item">
							<div class="cta-img">
								<img src="{{ asset('frontend') }}/img/callaction-bg.jpg" class="img-fluid" alt="">
							</div>
							<div class="text-box text-center">
								<h3 class="mb-10">Main Course</h3>
								<p>
									Chicken Steak with gerlic bread & Fries
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cta-img">
								<img src="{{ asset('frontend') }}/img/callaction-bg.jpg" class="img-fluid" alt="">
							</div>
							<div class="text-box text-center">
								<h3 class="mb-10">Main Course</h3>
								<p>
									Chicken Steak with gerlic bread & Fries
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Call To Action Area =================-->

	<!--================ Contact Area =================-->
<section class="contact-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div id="contactMap"></div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							Rooftop <br>
							Fine Dinning <br>
							Restaurant <br>
						</h1>
						<div class="mb-40">
							<p>432 Wyandotte Ave, Lakewood, OH, 44107</p>
							<p>432 Wyandotte Ave, Lakewood, OH, 44107</p>
						</div>
						<div class="mb-40">
							<p>012 44 (216) 785-9346</p>
							<p>012 44 (216) 785-9346</p>
							<p>012 44 (216) 785-9346</p>
						</div>
						<div class="mail">
							<p>info@rooftoprestaurant.co.uk</p>
							<p>support@rooftoprestaurant.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Contact Area =================-->
@endsection