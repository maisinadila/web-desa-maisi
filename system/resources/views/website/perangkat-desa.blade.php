@extends('website.template.base')
@section('content')

<section id="team-2" class="wide-60 team-section division">
	<div class="container">
		<div class="row">


			@foreach($list_perangkat->sortByDesc('level') as $p)
			<!-- TEAM MEMBER #1 -->
			<div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
				<div class="team-member">								

					<!-- Team Member Photo -->
					<div class="team-member-photo">

						<img class="img-fluid" src="{{url('public')}}/perangkat-desa/{{$p->foto}}" alt="team-member-foto">

						<!-- Social Icons -->
						<div class="tm-social clearfix">
							<ul class="text-center clearfix">																			
								<li><a href="#" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" class="ico-twitter"><i class="fab fa-twitter"></i></a></li>	
								<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>	

					</div>

					<!-- Team Member Meta -->		
					<div class="tm-meta">
						<h5 class="h5-sm">{{ucwords($p->nama)}}</h5>
						<span>{{ucwords($p->jabatan)}}</span>
					</div>	

				</div>								
			</div>	<!-- END TEAM MEMBER #1 -->

			@endforeach


		</div>	  <!-- End row -->
	</div>     <!-- End container -->
</section>	<!-- END TEAM-2 -->



@endsection