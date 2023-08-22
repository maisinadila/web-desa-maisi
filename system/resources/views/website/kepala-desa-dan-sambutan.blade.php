@extends('website.template.base')
@section('content')

<section id="content-1" class="wide-60 content-section division">
	<div class="container">
		<div class="row d-flex align-items-center">


			<!-- TEXT BLOCK -->	
			<div class="col-md-9 col-lg-8">
				<div class="txt-block pc-25 mb-40 wow fadeInLeft" data-wow-delay="0.4s">

					<!-- Title -->	
					<h4 class="h4-xl">Sambutan Kepala Desa</h4>

					<!-- Text -->
					<p>{!!nl2br($profil->sambutan_kepala)!!}
					</p>

					<!-- QUOTE -->
					<div class="quote quote-primary">

						
						<!-- Quote Author -->
						<div class="quote-author">
							<h5 class="h5-xs">{{ucwords($kades->nama)}} </h5>
							<span>{{ucwords($kades->jabatan)}}</span>
						</div>	
						
					</div>	

				</div>
			</div>	<!-- END TEXT BLOCK -->	


			<!-- IMAGE BLOCK -->
			<div class="col-md-3 col-lg-4">
				<div class="img-block pl-25 mb-40 wow fadeInRight" data-wow-delay="0.6s">
					<img class="img-fluid" src="{{url('public/perangkat-desa')}}/{{$kades->foto}}" alt="content-image">
				</div>
			</div>


		</div>	  <!-- End row -->	
	</div>     <!-- End container -->
</section>	<!-- END CONTENT-1 -->	

@endsection