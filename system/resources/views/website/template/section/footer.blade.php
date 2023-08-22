<div class="container">


	<!-- FOOTER CONTENT -->
	<div class="row">


		<!-- FOOTER INFO -->
		<div class="col-md-10 col-lg-4">
			<div class="footer-info mb-40">

				<!-- Footer Logo -->
				<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 364 x 90 pixels) -->
				<center>
				<img src="{{url('public/web/pengaturan')}}/{{ App\Models\Pengaturan::first()->logo }}" onerror="this.onerror=null;this.src='{{url("public")}}/logo-ketapang.png';"  width="100" height="150" alt="footer-logo"> 
				<h3>Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}</h3>
				</center>

			</div>	
		</div>	


		<!-- FOOTER PRODUCTS LINKS -->
		<div class="col-md-4 col-lg-2 col-xl-4">
			<div class="footer-links mb-40">

				<!-- Title -->
				<h5 class="h5-sm">Menu Lainnya</h5>

				<!-- Footer Links -->
				<ul class="foo-links clearfix">
					<li><a href="#">Layanan Desa</a></li>
					<li><a href="#">Program Desa</a></li>
					<li><a href="#">Peraturan Desa</a></li>

				</ul>

			</div>
		</div>


		<!-- FOOTER COMPANY LINKS -->
		<div class="col-md-4 col-lg-4 col-xl-4">
			<div class="footer-links mb-40">

				<!-- Title -->
				<h5 class="h5-sm">Menu Lainnya</h5>

				<!-- Footer Links -->
				<ul class="clearfix">
					<li><a href="#">Profil Wilayah Desa</a></li>
					<li><a href="#">Perangkat Desa</a></li>			
				</ul>

			</div>
		</div>


		<!-- FOOTER NEWSLETTER FORM -->


	</div>	  <!-- END FOOTER CONTENT -->


	<!-- BOTTOM FOOTER -->
	<div class="bottom-footer">
		<div class="row">


			<!-- FOOTER COPYRIGHT -->
			<div class="col-lg-8">
				<ul class="bottom-footer-list">
					<li><p>&copy; Politeknik Negeri Ketapang 2023 - {{date('Y')}}</p></li>
				</ul>
			</div>


			<!-- FOOTER SOCIALS LINKS -->
			<div class="col-lg-4 text-right">
				<ul class="foo-socials text-center clearfix">
<!-- 
					<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
					<li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
					<li><a href="#" class="ico-tumblr"><i class="fab fa-tumblr"></i></a></li>			 -->

									<!--
									<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>	
									<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>									
									<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
									<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>								
									<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>										
									<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
									<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
									<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
								-->	

							</ul>
						</div>


					</div>
				</div>	<!-- END BOTTOM FOOTER -->


			</div>	  