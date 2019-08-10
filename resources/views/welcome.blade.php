<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{asset('plugins/plantilla/img/fav-icon.png')}}" type="image/x-icon" />
	<title>Lavanderia - @yield('title','Home')</title>

	<!-- Icon css link -->
	<link href="{{asset('plugins/plantilla/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/css/icofont.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/vendors/linear-icon/style.css')}}" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="{{asset('plugins/plantilla/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Rev slider css -->
	<link href="{{asset('plugins/plantilla/vendors/revolution/css/settings.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/vendors/revolution/css/layers.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/vendors/animate-css/animate.css')}}" rel="stylesheet">

	<!-- Extra plugin css -->
	<link href="{{asset('plugins/plantilla/vendors/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/vendors/swiper/css/swiper.min.css" rel="stylesheet')}}">
	<link href="{{asset('plugins/plantilla/vendors/flipster-slider/jquery.flipster.min.css')}}" rel="stylesheet">

	<link href="{{asset('plugins/plantilla/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('plugins/plantilla/css/responsive.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="90">

	<div id="preloader">
		<div id="preloader_spinner">
			<div class="pre_inner">
				<div class="dot dot-1"></div>
				<div class="dot dot-2"></div>
				<div class="dot dot-3"></div>
			</div>
		</div>
	</div>

	<!--================Header Area =================-->
	<header class="dash_tp_menu_area nine_menu">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="{{asset('plugins/plantilla/img/dash-logo.png')}}" alt=""></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#about">About</a></li>
						<li><a href="#feature">Features</a></li>
						<li><a href="#screenshot">Screenshot</a></li>
						<li><a href="#team">Tema</a></li>
						<li><a href="#price">Price</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</header>
	<!--================End Header Area =================-->
	
	@yield('content')
	
	<!--================Footer Area =================-->
	<footer class="ten_footer_area">
		<div class="ten_footer_widget">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xs-6">
						<aside class="t_f_widget t_ab_widget">
							<img src="{{asset('plugins/plantilla/img/ten-f-logo.png')}}" alt="">
							<h4>Drimo App Landing Page</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of
								a page when looking at its layout. The point of using Lorem Ipsum is that it has a
								more-or-less normal distribution of letters.</p>
							<a href="#">Learn About Drimo Theme</a>
						</aside>
					</div>
					<div class="col-md-3 col-xs-6">
						<aside class="t_f_widget t_link_widget">
							<div class="ten_f_title">
								<h3>Refer Link</h3>
							</div>
							<ul>
								<li><a href="#"><i class="icofont icofont-thin-right"></i> Home</a></li>
								<li><a href="#"><i class="icofont icofont-thin-right"></i> About</a></li>
								<li><a href="#"><i class="icofont icofont-thin-right"></i> Blog</a></li>
								<li><a href="#"><i class="icofont icofont-thin-right"></i> Pricing</a></li>
								<li><a href="#"><i class="icofont icofont-thin-right"></i> News</a></li>
								<li><a href="#"><i class="icofont icofont-thin-right"></i> Apps page</a></li>
								<li><a href="#"><i class="icofont icofont-thin-right"></i> Contact</a></li>
							</ul>
						</aside>
					</div>
					<div class="col-md-4 col-xs-12">
						<aside class="t_f_widget t_contact_widget">
							<div class="ten_f_title">
								<h3>Contact with us</h3>
							</div>
							<h4>Address</h4>
							<h5>Phone : +00 901 980680</h5>
							<p>Mail : yourmail_09@hotmail.com</p>
							<a class="send_bent" href="#">Send Message</a>
							<h6>Follow Us</h6>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<div class="ten_f_copyright">
			<div class="container">
				<p class="copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
					made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset('plugins/plantilla/js/jquery-2.2.4.js')}}"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{asset('plugins/plantilla/js/bootstrap.min.js')}}"></script>
	<!-- Rev slider js -->
	<script src="{{asset('plugins/plantilla/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script
		src="{{asset('plugins/plantilla/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script
		src="{{asset('plugins/plantilla/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script
		src="{{asset('plugins/plantilla/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script
		src="{{asset('plugins/plantilla/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<!-- Extra Plugin -->
	<script src="{{asset('plugins/plantilla/vendors/parallax/jquery.parallax-scroll.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/counterup/waypoints.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/counterup/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/isotope/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/flexslider/flex-slider.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/flexslider/mixitup.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/nice-selector/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/swiper/js/swiper.min.js')}}"></script>
	<script src="{{asset('plugins/plantilla/vendors/flipster-slider/jquery.flipster.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('plugins/plantilla/js/gmaps.min.js')}}"></script>

	<script src="{{asset('plugins/plantilla/js/theme.js')}}"></script>
</body>

</html>