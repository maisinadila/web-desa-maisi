
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


	<script>
		const ctx = document.getElementById('myChart');

		new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					y: {
						beginAtZero: true
					}
				}
			}
		});
	</script>