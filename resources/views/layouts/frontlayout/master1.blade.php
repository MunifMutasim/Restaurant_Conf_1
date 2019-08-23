<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('frontend') }}/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Rooftop Restaurant</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/linearicons.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/availability-calendar.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header-area">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center navbar-expand-md">
					<div class="col menu-left">
						<a class="active" href="index.html">Home</a>
						<a href="menu.html">menu</a>
						<a href="about.html">about</a>
					</div>
					<div class="col-3 logo">
						<a href="index.html"><img class="mx-auto" src="{{ asset('frontend') }}/img/logo.png" alt=""></a>
					</div>
					<nav class="col navbar navbar-expand-md justify-content-end">

						<!-- Toggler/collapsibe Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class="lnr lnr-menu"></span>
						</button>

						<!-- Navbar links -->
						<div class="collapse navbar-collapse menu-right" id="collapsibleNavbar">
							<ul class="navbar-nav justify-content-center w-100">
								<li class="nav-item hide-lg">
									<a class="nav-link" href="index.html">Home</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="menu.html">menu</a>
								</li>
								<li class="nav-item hide-lg">
									<a class="nav-link" href="about.html">about</a>
								</li>
								<!-- Dropdown -->
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										Pages
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="contact.html">Contact</a>
										<a class="dropdown-item" href="elements.html">Elements</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
										Blog
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="blog-home.html">Blog</a>
										<a class="dropdown-item" href="blog-single.html">Blog Detail</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="gallery.html">Gallery</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start banner Area =================-->
    <!-- YIELD here -->
    @yield('about_content')
    @yield('banner_area')
	<!--================ End banner Area =================-->

	<!--================ Left Right And Banner Icon =================-->
	@yield('left_right_and_banner_icon')
	<!--================ Left Right And Banner Icon =================-->
    
    @yield('content1')
	
	<!--================ Start Footer Area =================-->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Top Products</h4>
						<ul>
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Quick links</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Resources</h4>
						<ul>
							<li><a href="#">Guides</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Experts</a></li>
							<li><a href="#">Agencies</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h4>Newsletter</h4>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get">
								<div class="input-group">
									<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit">
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
									<div class="info"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center justify-content-between">
				<p class="footer-text m-0 col-lg-6 col-md-12">Copyright © 2018 All rights reserved | This template is made with
					<span class="lnr lnr-heart"></span> by <a href="#">Colorlib</a></p>
				<div class="col-lg-6 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area =================-->

	<script src="{{ asset('frontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>
	<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.sticky.js"></script>
	<script src="{{ asset('frontend') }}/js/parallax.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap-datepicker.js"></script>
	<script src="{{ asset('frontend') }}/js/main.js"></script>
</body>

</html>