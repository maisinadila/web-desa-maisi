<!DOCTYPE html>
<!-- Metreex - SEO & Digital Marketing Agency Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
		<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
			<!--[if (gte IE 9)|!(IE)]><!-->
				<html lang="en">
				<head>

					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
					<meta name="author" content="Jthemes"/>	
					<meta name="description" content="Metreex - SEO & Digital Marketing Agency Landing Page Template"/>
					<meta name="keywords" content="Responsive, HTML5 template, Jthemes, SEO, Strategy, Digital Marketing Agency, Online Marketing">	
					<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

					<!-- SITE TITLE -->
					<title>{{ucwords(App\Models\Pengaturan::first()->nama_desa)}}</title>

					<!-- FAVICON AND TOUCH ICONS  -->
					<link rel="shortcut icon" href="{{url('public')}}/logo/logo-desa.png" type="image/x-icon">
					<link rel="icon" href="{{url('public')}}/logo/logo-desa.png" type="image/x-icon">
					<link rel="apple-touch-icon" sizes="152x152" href="{{url('public')}}/logo/logo-desa.png">
					<link rel="apple-touch-icon" sizes="120x120" href="{{url('public')}}/logo/logo-desa.png">
					<link rel="apple-touch-icon" sizes="76x76" href="{{url('public')}}/logo/logo-desa.png">
					<link rel="apple-touch-icon" href="{{url('public')}}/logo/logo-desa.png">
					<link rel="icon" href="{{url('public')}}/logo/logo-desa.png" type="image/x-icon">

					<!-- GOOGLE FONTS -->
					<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">		
					<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&display=swap" rel="stylesheet">

					<!-- BOOTSTRAP CSS -->
					<link href="{{url('public/assets-website')}}/css/bootstrap.min.css" rel="stylesheet">

					<!-- FONT ICONS -->
					<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">		
					<link href="{{url('public/assets-website')}}/css/flaticon.css" rel="stylesheet">

					<!-- PLUGINS STYLESHEET -->
					<link href="{{url('public/assets-website')}}/css/menu.css" rel="stylesheet">	
					<link id="effect" href="{{url('public/assets-website')}}/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
					<link href="{{url('public/assets-website')}}/css/magnific-popup.css" rel="stylesheet">	
					<link href="{{url('public/assets-website')}}/css/flexslider.css" rel="stylesheet">
					<link href="{{url('public/assets-website')}}/css/owl.carousel.min.css" rel="stylesheet">
					<link href="{{url('public/assets-website')}}/css/owl.theme.default.min.css" rel="stylesheet">

					<!-- ON SCROLL ANIMATION -->
					<link href="{{url('public/assets-website')}}/css/animate.css" rel="stylesheet">

					<!-- TEMPLATE CSS -->
					<!-- <link href="{{url('public/assets-website')}}/css/carrot.css" rel="stylesheet">     --> 
					<!-- <link href="{{url('public/assets-website')}}/css/dodgerblue.css" rel="stylesheet"> --> 
					<!-- <link href="{{url('public/assets-website')}}/css/green.css" rel="stylesheet">      -->
					<!-- <link href="{{url('public/assets-website')}}/css/magneta.css" rel="stylesheet">    --> 
					<link href="{{url('public/assets-website')}}/css/olive.css" rel="stylesheet">
					<!-- <link href="{{url('public/assets-website')}}/css/orange.css" rel="stylesheet">     -->
					<!-- <link href="{{url('public/assets-website')}}/css/purple.css" rel="stylesheet">     -->
					<!-- <link href="{{url('public/assets-website')}}/css/red.css" rel="stylesheet">        -->
					<!-- <link href="{{url('public/assets-website')}}/css/skyblue.css" rel="stylesheet">    -->
					<!-- <link href="{{url('public/assets-website')}}/css/teal.css" rel="stylesheet">       -->

					<!-- RESPONSIVE CSS -->
					<link href="{{url('public/assets-website')}}/css/responsive.css" rel="stylesheet"> 
					<!-- chart -->
					<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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


									</ul>
								</nav>	<!-- END MAIN MENU -->

							</div>
						</div>	<!-- END NAVIGATION MENU -->


					</div>     <!-- End header-wrapper -->
				</header>	<!-- END HEADER -->




			<!-- HERO-6
				============================================= -->	
				<section id="hero-6" class="hero-section division">


					<!-- SLIDER -->
					<div class="slider blue-nav">
						<ul class="slides ">
							@foreach( $banner as $data)
							<!-- SLIDE #1 -->
							<li id="slide-1" class="" >

								<!-- Background Image -->
								<img src="{{url('public/web/banner')}}/{{$data->banner_foto}}" alt="slide-background" style="width: 100%; height: 800px; object-fit: contain !important;">
								
								
								<!-- Image Caption -->
								<div class="caption d-flex align-items-center center-align">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<div class="caption-txt white-color"><!-- judul -->
													<h2>{{ucwords($data->banner_judul)}}</h2>

													<!-- deskripsi -->
													<p>{!!nl2br($data->banner_deskripsi)!!}
													</p>


												</div>
											</div>
										</div>
									</div>
								</div>

							</li>
							@endforeach

							

						</ul>
					</div>	<!-- END SLIDER -->


				</section>	<!-- END HERO-6 -->	




			<!-- SAMBUTAN KEPALA DESA-2
				============================================= -->
				<section id="about-2" class="wide-60 about-section division">
					<div class="container">
						<div class="row d-flex align-items-center">
							<div class="col-md-8 col-lg-8">
								<div class="txt-block pc-25 mb-40 wow fadeInLeft" data-wow-delay="0.4s">
									<h4 class="h4-xl">Kepala Desa dan Sambutan</h4>
									<div class="row">
										<div class="col-md-4">
											<center>
											<img src="{{url('public/perangkat-desa')}}/{{$kades->foto}}" width="200px" alt="">
											</center>
										</div>
										<div class="col-md-8">
											<p><b>{{ucwords($kades->nama)}} - </b>" {!! Str::limit(strip_tags($profil->sambutan_kepala), 500) !!}" <br>
												<a href="{{url('kepala-desa-dan-sambutan')}}" class="btn btn-sm btn-primary">Baca Selengkapnya</a></p>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								
								<div class=" fadeInRight" data-wow-delay="0.6s">
									<canvas id="myDoughnutChart" width="400" height="400"></canvas>
								</div>
							</div>
						</div>
					</div>
				</section>




				<!-- end layanan -->

				<section id="blog-2" class="bg-lightgrey wide-60 blog-section division">				
					<div class="container">


						<!-- BLOG POSTS -->
						<div class="row">
							<div class="col-md-12 reviews-grid">
								<h4 class="h4-xl">Berita Terbaru <hr></h4>
								<div class="masonry-wrap grid-loaded">


									@foreach($list_berita->sortByDesc('berita_id')->take(6) as $b)
									<div class="masonry-item">
										<div class="blog-post">

											<!-- BLOG POST IMAGE -->
											<div class="blog-post-img">
												<img class="img-fluid" src="{{url('public')}}/web/berita/{{$b->berita_cover}}" alt="blog-post-image" />
											</div>

											<!-- BLOG POST TEXT -->
											<div class="blog-post-txt">

												<!-- Post Tag -->
												<p class="post-read"><i class="far fa-clock"></i> {{$b->created_at->diffForHumans()}}</p>

												<!-- Post Link -->
												<h5 class="h5-md">
													<a href="{{url('berita-desa',$b->berita_id)}}">{{ucwords($b->berita_judul)}}
													</a>
												</h5>

												<!-- Text -->
												<p class="grey-color">{!! Str::limit(strip_tags($b->berita_isi), 90) !!}

												</p>


											</div>	<!-- END BLOG POST TEXT -->

										</div>
									</div>	
									@endforeach


								</div>
								{{ $list_berita->links() }}
							</div>


							<div class="col-md-12">
								<h4 class="h4-xl">Informasi Terbaru <hr></h4>
								<div class="masonry-wrap grid-loaded">


									@foreach($list_informasi->sortByDesc('informasi_id')->take(6) as $b)
									<div class="masonry-item">
										<div class="blog-post">

											<!-- BLOG POST IMAGE -->
											<div class="blog-post-img">
												<img class="img-fluid" src="{{url('public')}}/web/informasi/{{$b->informasi_cover}}" alt="blog-post-image" />
											</div>

											<!-- BLOG POST TEXT -->
											<div class="blog-post-txt">

												<!-- Post Tag -->
												<p class="post-read"><i class="far fa-clock"></i> {{$b->created_at->diffForHumans()}}</p>

												<h5 class="h5-md">
													<a href="{{url('informasi-desa',$b->informasi_id)}}">{{ucwords($b->informasi_judul)}}
													</a>
												</h5>
												<p class="grey-color">{!! Str::limit(strip_tags($b->informasi_isi), 90) !!}

												</p>


											</div>	<!-- END BLOG POST TEXT -->

										</div>
									</div>	
									@endforeach


								</div>
							</div>
							{{ $list_informasi->links() }}
						</div>


					</div>	
				</section>



			<!-- FOOTER-2
				============================================= -->
				<footer id="footer-2" class="pt-100 footer division">
				@include('website.template.section.footer')									
		</footer>




	</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
			============================================= -->	
			<script src="{{url('public/assets-website')}}/js/jquery-3.3.1.min.js"></script>
			<script src="{{url('public/assets-website')}}/js/bootstrap.min.js"></script>	
			<script src="{{url('public/assets-website')}}/js/modernizr.custom.js"></script>
			<script src="{{url('public/assets-website')}}/js/jquery.easing.js"></script>
			<script src="{{url('public/assets-website')}}/js/jquery.appear.js"></script>
			<script src="{{url('public/assets-website')}}/js/menu.js"></script>
			<script src="{{url('public/assets-website')}}/js/materialize.js"></script>	
			<script src="{{url('public/assets-website')}}/js/jquery.scrollto.js"></script>
			<script src="{{url('public/assets-website')}}/js/imagesloaded.pkgd.min.js"></script>
			<script src="{{url('public/assets-website')}}/js/isotope.pkgd.min.js"></script>
			<script src="{{url('public/assets-website')}}/js/jquery.flexslider.js"></script>
			<script src="{{url('public/assets-website')}}/js/owl.carousel.min.js"></script>
			<script src="{{url('public/assets-website')}}/js/jquery.magnific-popup.min.js"></script>	
			<script src="{{url('public/assets-website')}}/js/seo-form.js"></script>	
			<script src="{{url('public/assets-website')}}/js/contact-form.js"></script>	
			<script src="{{url('public/assets-website')}}/js/comment-form.js"></script>
			<script src="{{url('public/assets-website')}}/js/jquery.validate.min.js"></script>	
			<script src="{{url('public/assets-website')}}/js/jquery.ajaxchimp.min.js"></script>	
			<script src="{{url('public/assets-website')}}/js/wow.js"></script>	

			<!-- Custom Script -->		
			<script src="{{url('public/assets-website')}}/js/custom.js"></script>

			<script>
				new WOW().init();
			</script>

			<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="{{url('public/assets-website')}}/js/html5shiv.js" type="text/javascript"></script>
			<script src="{{url('public/assets-website')}}/js/respond.min.js" type="text/javascript"></script>
			<![endif] -->

				<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
	-->
	<!-- End Google Analytics -->




	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>

		const $anak = {{$anak}};
		const $remaja = {{$remaja}};
		const $dewasa = {{$dewasa}};
		const $dewasa_atas = {{$dewasa_atas}};
		const $manula = {{$manula}};

    // Sample data for the chart
		const data = {
			labels: ['Anak-anak', 'Remaja', 'Dewasa', 'Dewasa Atas', 'Manula'],
			datasets: [{
        data: [ $anak, $remaja , $dewasa , $dewasa_atas, $manula], // Replace these values with your data
        backgroundColor: ['#ff6384', '#36a2eb', '#4bc0c0', '#eb8036', '#ebda36'], // Define colors for segments
    }],
		};

    // Configuration options for the chart
		const options = {
      cutoutPercentage: 70, // Adjust the size of the hole in the center (0 for a pie chart)
      // You can customize other options here, such as title, tooltips, etc.
  };

    // Get the canvas element
  const ctx = document.getElementById('myDoughnutChart').getContext('2d');

    // Create the doughnut chart
  const myDoughnutChart = new Chart(ctx, {
  	type: 'doughnut',
  	data: data,
  	options: options,
  });
</script>


</body>



</html>	