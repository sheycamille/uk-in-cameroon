<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<div class="main-menu sticky-header">
		<div class="main-menu-inner">
			<div class="main-menu-left">
				<div class="main-menu-logo">
					<a href="index.html"><img src="assets/images/logo/logo.jpeg" alt="" width="250"></a>
				</div>
				<!--main-menu-logo-->
				<div class="navigation">
					<ul class="main-menu-list list-unstyled">
						
						<!--has-dropdown-->
						<li><a href="{{route('login')}}">Home</a>
						</li>

						<!--has-dropdown-->
						<!-- <li class="has-dropdown">
						<a href="#">News</a>
						<ul class="list-unstyled">
							<li><a href="news.html">News</a></li>
							<li><a href="news-details.html">News Details</a></li>
						</ul> -->
						<!-- list-unstyled -->
						<!-- </li> -->
						<!--has-dropdown-->
						<li><a href="contact.html">Contact</a>
						</li><!-- li -->
					</ul><!-- main-menu-list -->
				</div>
				<!--navigation-->
			</div>
			<!--main-menu-left-->
			<div class="main-menu-right">
				<div class="mobile-menu-button mobile-nav-toggler">
					<span></span>
					<span></span>
					<span></span>
				</div><!-- mobile-menu-button -->
				
			</div>
			<!--main-menu-right-->
		</div>
		<!--main-menu-inner-->
</div>

@yield('content')

<section class="footer">
	<div class="footer-inner">
		<div class="container">
			<div class="row d-flex align-items-start justify-content-between">

				<div class="col-lg-3 pt-lg-5 mt-lg-5">
					<img src="assets/images/logo/logo.jpeg" alt="" width="200" height="100">
					<div class="footer-widget-text">
						<p>Your gateway to seamless trade connections between Cameroon and the United Kingdom</p>
					</div>
					<div class="footer-widget-socials">
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="footer-widget-explore">
							<h4 class="footer-widget-title">Explore</h4>
							<ul class="list-unstyled">
								<li><a href="department-details.html">Home</a></li>
								<li><a href="service-details.html">Market Research</a></li>
								<li><a href="event-details.html">Services</a></li>
								<li><a href="team-details.html">Resources</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="contact.html">About Us</a></li>
								<li><a href="contact.html">FAQ's</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="footer-widget-department">
							<h4 class="footer-widget-title">Departments</h4>
							<ul class="list-unstyled">
								<li><a href="department-details.html">Health & Safety</a></li>
								<li><a href="department-details.html">Housing & Land</a></li>
								<li><a href="department-details.html">Legal & Finance</a></li>
								<li><a href="department-details.html">Transport & Traffic</a></li>
								<li><a href="department-details.html">Arts & Culture</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-widget">
						<div class="footer-widget-contact">
							<h4 class="footer-widget-title">Contact</h4>
							<p>4th Street Bastos, Yaounde <br> Cameroon</p>
						</div>
						<div class="footer-widget-contact-list">
							<i class="fa-solid fa-envelope"></i>
							<div class="footer-widget-contact-item">
								<a href="mailto:needhelp@company.com">info@cameroonuktradehub.com</a>
							</div>
						</div>
						<div class="footer-widget-contact-list">
							<i class="fa-solid fa-phone"></i>
							<div class="footer-widget-contact-item">
								<a href="tel:+92-003-68-090">+92 (003) 68-090</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="conatiner">
			<p>© Copyrights <span id="year"></span> | UK - Cameroon TradeHub</p>
		</div>
	</div>
</section>

</body>
</html>