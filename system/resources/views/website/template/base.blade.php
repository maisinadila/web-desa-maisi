<!DOCTYPE html>
<html lang="en">
<head>
	@include('website.template.section.assets')

</head>




<body>




		<!-- PRELOADER SPINNER
			============================================= -->		
			<div id="loader-wrapper">
				<div id="loading">
					<div id="loading-center">
						<div id="loading-center-absolute">
							<div class="object" id="object_four"></div>
							<div class="object" id="object_three"></div>
							<div class="object" id="object_two"></div>
							<div class="object" id="object_one"></div>
						</div>
					</div> 
				</div>
			</div>




		<!-- PAGE CONTENT
			============================================= -->	
			<div id="page" class="page">




			<!-- HEADER
				============================================= -->
				<header id="header" class="header tra-menu navbar-light">
					<div class="header-wrapper">


						<!-- MOBILE HEADER -->
						<div class="wsmobileheader clearfix">	
							<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
							<span class="smllogo smllogo-black"><img src="{{url('public/web/pengaturan')}}/{{ App\Models\Pengaturan::first()->logo }}" onerror="this.onerror=null;this.src='{{url("public")}}/logo-ketapang.png';" width="20%" height="auto" alt="mobile-logo"/></span>
							<span class="smllogo smllogo-white"><img src="{{url('public/web/pengaturan')}}/{{ App\Models\Pengaturan::first()->logo }}" onerror="this.onerror=null;this.src='{{url("public")}}/logo-ketapang.png';" width="20%" height="auto" alt="mobile-logo"/></span>
							<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
						</div>


						<!-- NAVIGATION MENU -->
						<div class="wsmainfull menu clearfix">
							<div class="wsmainwp clearfix">

								<div class="desktoplogo"><a href="#hero-6" class="logo-black"><img src="{{url('public/web/pengaturan')}}/{{ App\Models\Pengaturan::first()->logo }}" onerror="this.onerror=null;this.src='{{url("public")}}/logo-ketapang.png';" width="100%" height="50" alt="header-logo"></a></div>
								<div class="desktoplogo"><a href="#hero-6" class="logo-white">
									<img src="{{url('public/web/pengaturan')}}/{{ App\Models\Pengaturan::first()->logo }}"  onerror="this.onerror=null;this.src='{{url("public")}}/logo-ketapang.png';" width="100%" height="50" alt="header-logo"></a></div>


									<!-- MAIN MENU -->
									<nav class="wsmenu clearfix blue-header">
										@include('website.template.section.navbar')

									</nav>
								</div>
							</div>
						</div>  
					</header>	

	<!-- PAGE HERO
		============================================= -->	
		<section id="case-studies-page" class="page-hero-section division">
			<div class="container">	
				<div class="row">	


					<!-- PAGE HERO TEXT -->
					<div class="col-md-10 offset-md-1">
						<div class="hero-txt text-center white-color">

							<!-- Title -->
							<h3 class="h3-xl mt-3">{{strtoupper($title)}}</h3>

						</div>
					</div>	<!-- END PAGE HERO TEXT -->


				</div>    <!-- End row --> 
			</div>	   <!-- End container --> 
		</section>	<!-- END PAGE HERO -->	




				<!-- BREADCRUMB
					============================================= -->
					<div id="breadcrumb" class="division">
						<div class="container">
							<div class="row">

								<!-- BREADCRUMB NAV -->
								<div class="col-lg-12">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.html" class="primary-color">Beranda</a></li>
											<li class="breadcrumb-item active" aria-current="page">{{ucwords($title)}}</li>
										</ol>
									</nav>
								</div> 

							</div>	 <!-- End row -->
						</div>	<!-- End container -->		
					</div>	<!-- END BREADCRUMB -->	

					@yield('content')
			<!-- FOOTER-2
				============================================= -->
				<footer id="footer-2" class="pt-100 footer division">
					@include('website.template.section.footer')									
				</footer>
			</div>	
			@include('website.template.section.js')


		</body>



		</html>	