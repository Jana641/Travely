
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jufailitech.com/envatoitems/travilo/html/tour-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 12:53:13 GMT -->
<head>
	<meta charset="utf-8">
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Travilo - Tour Single</title>

	<link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&amp;display=swap" rel="stylesheet">

	<!-- Stylesheets -->
<link href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/fontawesome/css/brands.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/fontawesome/css/solid.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/simple-line-icons/css/simple-line-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/flaticon/css/flaticon.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/slick.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/swiper.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/lib/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom-animate.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


</head>

<body>
	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="loader-wrap">
			<div class="preloader">
				<div class="preloader-close">x</div>
				<div id="handle-preloader" class="handle-preloader">
					<div class="animation-preloader">
						<div class="txt-loading">
						<span data-text-preloader="T" class="letters-loading">T</span>
							<span data-text-preloader="R" class="letters-loading">R</span>
							<span data-text-preloader="A" class="letters-loading">A</span>
							<span data-text-preloader="V" class="letters-loading">V</span>
							<span data-text-preloader="E" class="letters-loading">E</span>
							<span data-text-preloader="L" class="letters-loading">L</span>
							<span data-text-preloader="Y" class="letters-loading">Y</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Preloader End -->


		<!--Menu Backdrop-->
		<div class="menu-backdrop"></div>

		<!-- Hidden Navigation Bar -->
		<div class="hidden-bar">
			<!-- Hidden Bar Wrapper -->
			<div class="hidden-bar-wrapper">
				<div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation"
							viewBox="0 0 16 14">
							<path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
						</svg></span></div>
				<div class="nav-logo-box">
					<!-- logo will be copied here ! -->
				</div>
				<!-- .Side-menu -->
				<nav class="side-menu">
					<!-- main-menu will be copied here! -->
				</nav><!-- .side-menu -->

				<div class="links-box clearfix">
					<div class="clearfix">
						<div class="link"><a href="contact.html" class="theme-btn btn-style-one"><span>Login /
									Signup</span></a></div>
					</div>
				</div>

			</div><!-- / Hidden Bar Wrapper -->
		</div>
		<!-- / Hidden Bar -->

		<!-- Banner Section -->
		<div class="tour-single-banner">
			<div class="image-layer" style="background-image: url('{{ asset('images/resources/featured/featured-4.jpg') }}');">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<div class="content clearfix">
						<div class="t-type">
							<div class="icon"><img src="{{asset('./images/icons/t-icon-1.png')}}" alt=""></div>
							Tour Type <br><strong>Adventure</strong>
						</div>
						<div class="links">
							<ul class="clearfix">
								<li><a href="#">Gallery <i class="far fa-images"></i></a></li>
								<li><a href="#">Video <i class="far fa-video-camera"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Banner Section -->

		<!--Default Single Container-->
		<div class="dsp-container tour-single">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Side-->
					<div class="content-side col-xl-8 col-lg-12 col-md-12 col-sm-12">
						<div class="content-inner">

							<div class="sp-header">
								<div class="loc-rat clearfix">
									<div class="rating"><a href="#" class="theme-btn"><i class="fa-solid fa-star"></i>
											<strong>{{$flight->rate}}</strong></a></div>
								</div>
								<h1>{{$flight->name}}</h1>
								<div class="info clearfix">
									<div class="departure_time"><i class="fa-solid fa-clock"></i>departure time: {{$flight->departure_time}}</div>
									<div class="return_time"><i class="fa-solid fa-clock"></i>return date: {{$flight->return_date}}</div>

									<div class="guests"><i class="fa-solid fa-user"></i>guests: {{$flight->guests}}</div>
								</div>
							</div>

							<div class="upper-content">
								<div class="text-content">
									<h3>Flight Description</h3>
									<p>{{$flight->long_description}}</p>
									<br>
									<h5>Highlights</h5>
									<ul class="styled-list-one">
									@foreach ($flight->highlights as $highlight)
                 <li>{{ $highlight}}</li>
                    @endforeach
									</ul>
								</div>
								
							</div>

					
						</div>
					</div>

					<!-- Book a flight -->
					<!--Sidebar Side-->
					<div class="sidebar-side col-xl-4 col-lg-8 col-md-12 col-sm-12">
						<div class="sidebar-inner">
							<div class="dsp-widget t-book-widget alt-margin">
								<div class="inner-box">
									<div class="t-book-header">
										<span class="st-txt">Start <br>From</span>
										<span class="amount">${{$flight->price}}</span>
										<span class="qty">/ Per Person</span>
									</div>
									<div class="lower-box">
										<div class="form-box site-form">
											<form method="post" action="{{ route('bookings.store') }}">
											@csrf
												<div class="fields">
													<div class="form-group">
														<div class="field-label">Date</div>
														<div class="field-inner">
														<input type="hidden" name="flight_id" value="{{$flight->id}}" />
														<input class="datepicker" name="field-name"
																value="{{$flight->departure_time}}"  readonly>

																<!-- <input type="date" name="field-name" value="{{ $flight->departure_time }}" readonly> -->

															<i class="alt-icon fa fa-calendar-alt"></i>
														</div>
													</div>
												</div>
												<h6>Tickets</h6>
												<div class="tickets">
													<div class="ticket-block clearfix">
														<div class="tick-ttl">Adults (18+ years)</div>
														<div class="tick-sel">
															<div class="quantity-box">
																<div class="item-quantity">
																	<input class="qty-spinner" type="text" value="1"
																		name="adult_quantity">
																</div>
															</div>
														</div>

													</div>
													<div class="ticket-block clearfix">
														<div class="tick-ttl">Kids (12+ years)</div>
														<div class="tick-sel">
															<div class="quantity-box">
																<div class="item-quantity">
																	<input class="qty-spinner" type="text" value="1"
																		name="kid_quantity">
																</div>
															</div>
														</div>
													</div>
													<div class="ticket-block clearfix">
														<div class="tick-ttl">Children (3+ years)</div>
														<div class="tick-sel">
															<div class="quantity-box">
																<div class="item-quantity">
																	<input class="qty-spinner" type="text" value="1"
																		name="child_quantity">
																</div>
															</div>
														</div>
													</div>
												</div>
												<h6>Additional Service</h6>
												<div class="add-ser">
    <ul>
        <li>
            <div class="cb-block">
                <input type="checkbox" name="cb-1" id="cb-1">
                <label class="clearfix" for="cb-1">
                    <span class="txt">Additional Guide</span>
                    <span class="amount">50</span> 
                </label>
                <input type="hidden" name="additional_guide_price" value="50">
            </div>
        </li>
        <li>
            <div class="cb-block">
                <input type="checkbox" name="cb-2" id="cb-2">
                <label class="clearfix" for="cb-2">
                    <span class="txt">Internet</span>
                    <span class="amount">30</span>
                </label>
                <input type="hidden" name="internet_price" value="30">
            </div>
        </li>
        <li>
            <div class="cb-block">
                <input type="checkbox" name="cb-3" id="cb-3">
                <label class="clearfix" for="cb-3">
                    <span class="txt">Photography</span>
                    <span class="amount">90</span>
                </label>
                <input type="hidden" name="photography_price" value="90">
            </div>
        </li>
    </ul>
</div>

												<div class="proceed-link"><button type="submit"
														class="theme-btn btn-style-two"><span>Proceed to
															Book</span></button></div>
											</form>
										</div>
									</div>
								</div>
							</div>

							<!--Widget-->
							<div class="dsp-widget get-help-widget">
								<div class="inner">
									<h6>Get Help</h6>
									<h3>Need Help to Book?</h3>
									<p class="travilo-text">Our dedicated team of travel experts is here to assist you
										every step of the
										way, ensuring a seamless and unforgettable journey.</p>
									<div class="call-to">
										<a href="tel:+9689999000"><i class="icon fa-solid fa-phone"></i> Call Us <span
												class="nmbr">+968
												9999 9000</span></a>
									</div>
								</div>
							</div>

							<!--Widget-->
							<div class="dsp-widget similar-widget">
								

						</div>
					</div>

				</div>
			</div>
		</div>

	
		<!--Main Footer-->
     
		<!--Main Footer-->
		<footer class="main-footer style-two">
			<div class="upper-section">
				<div class="footer-subscribe">
					<div class="title-box centered">
						<div class="subtitle">Get Regular Updates</div>
						<h2>Subscribe to our Newsletter</h2>
					</div>
					<div class="form-box subscribe-form">
						<form method="post" action="https://jufailitech.com/envatoitems/travilo/html/contact.html">
							<div class="form-group">
								<div class="field-inner">
									<input type="email" name="email" value="" placeholder="Type your email here"
										required>
								</div>
								<button type="submit" class="theme-btn"><span>Subscribe</span></button>
							</div>
						</form>
					</div>
				</div>
				<div class="auto-container">
					<div class="content-box">
						<div class="row clearfix">
							<div class="footer-column col-xl-4 col-lg-3 col-md-6 col-sm-12">
								<div class="footer-widget about-widget">
									<div class="footer-info">
										<ul class="info">
											<li class="address"><a href="#"><i class="icon fa fa-map-marker-alt"></i>
													20, Love Street, Muscat, Oman</a></li>
											<li class="phone"><a href="tel:+96899999000"><i
														class="icon fa-solid fa-phone"></i>
													+96899999000</a></li>
											<li class="email"><a href="mailto:hello@travely.com"><i
														class="icon fa fa-envelope"></i>
													hello@travely.com</a></li>
										</ul>
										<ul class="social-links clearfix">
											<li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
								<div class="row clearfix">

									<div class="footer-column col-lg-6 col-md-6 col-sm-12">
										<div class="footer-widget links-widget">
											<h4>Top Destination</h4>
											<div class="links">
												<ul>
													<li><a href="#">New York</a></li>
													<li><a href="#">London</a></li>
													<li><a href="#">Rome</a></li>
													<li><a href="#">Mascot</a></li>
													<li><a href="#">Dhaka</a></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="footer-column col-lg-6 col-md-6 col-sm-12">
										<div class="footer-widget links-widget">
											<h4>Useful Links</h4>
											<div class="links">
												<ul>
													<li><a href="#">About Us</a></li>
													<li><a href="#">Company Profile</a></li>
													<li><a href="#">Team Members</a></li>
													<li><a href="#">Support</a></li>
													<li><a href="#">Career</a></li>
												</ul>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
								<div class="footer-widget app-widget">
									<h4>Download App</h4>
									<!--Logo-->
									<div class="app-info">
										<p class="travilo-text">Download our user-friendly app for seamless access to
											real-time updates, and
											exclusive offers on the go.</p>
										<div class="links">
											<div class="link"><a href="#"><img src="./images/apple-store.png"
														alt=""></a></div>
											<div class="link"><a href="#"><img src="./images/play-store.png"
														alt=""></a></div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="f-bottom">
				<div class="auto-container">
					<div class="inner clearfix">
						<div class="copyright">All rights researved <strong>Travely</strong> &copy; 2023</div>
						<div class="bottom-links">
							<ul class="clearfix">
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</footer>


	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html">
		<span class="icon"><img src="{{asset('./images/arrow-up.svg')}}" alt="" title="Go To Top"></span>
	</div>

<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('js/lib/popper.min.js') }}"></script>
<script src="{{ asset('js/lib/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/lib/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/lib/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/lib/isotope.min.js') }}"></script>
<script src="{{ asset('js/lib/slick.min.js') }}"></script>
<script src="{{ asset('js/lib/appear.min.js') }}"></script>
<script src="{{ asset('js/lib/wow.min.js') }}"></script>
<script src="{{ asset('js/lib/touchspin.min.js') }}"></script>
<script src="{{ asset('js/custom-script.js') }}"></script>

</body>


<!-- Mirrored from jufailitech.com/envatoitems/travilo/html/tour-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 12:53:22 GMT -->
</html>
@endsection