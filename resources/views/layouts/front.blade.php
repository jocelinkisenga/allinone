<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Hazetu Petroleum</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/logo.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('front/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('front/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('front/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('front/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('front/css/slicknav.min.css')}}">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('front/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">

	@livewireStyles

</head>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
	<header class="header shop">

		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><p class="font-weight-light">Hazetu Petroleum</p></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Rechercher votre produit ici..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">Tout Produit</option>
									<option>Essence</option>
									<option>Mazout</option>
									<option>Petrole</option>
								</select>
								<form>
									<input name="search" placeholder="Rechercher votre produit ici..." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">@livewire('cardcounter')</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
                                    @livewire('card')
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">

						</div>

						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav align-items-center">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="ListeFournisseur.html">Liste de Fournisseur</a></li>

													<li><a href="#">Boutique<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="cart.html">Chariot</a></li>
															<li><a href="checkout.html">Paiement</a></li>
														</ul>
													</li>



												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->





@yield('content')







	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><h5>Presentation Entreprise</h5></a>
							</div>

							<p class="text">Habari Zetu Services est une entreprise lancée en Décembre 2018 au registre de commerce CD/LSH/RCCM/18-A-00748 et elle est basée à Lubumbashi en République Démocratique du Congo.</p>
							<p class="call">Question? Appellez nous 24/7<span><a href="tel:+243975501066">+243 97 55 010 66</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>


					<div class="col-lg-6 col-md-8 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>781 Avenue Kashobwe Quartier Golf Baudouin Lubumbashi RDC
									</li>
									<li>RCCM: 18-A-00748, ID NAT: 6-83-N41700Q, NIF: A1906579Y
									</li>
									<li>info@hazetupetroleum.com</li>
									<li>+243 97 55 010 66</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container text-center">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2023   -  All Rights Reserved.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
@livewireScripts
	<!-- Jquery -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('front/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('front/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('front/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('front/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('front/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('front/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('front/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('front/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('front/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('front/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('front/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('front/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('front/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('front/js/active.js')}}"></script>
</body>
</html>
