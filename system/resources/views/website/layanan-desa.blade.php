@extends('website.template.base')
@section('content')

<section id="services-2" class="pt-80 pb-30 services-section division">
	<div class="container">
		<div class="row">

			@foreach($list_layanan as $l)
			<!-- SERVICE BOX #9 -->
			<div class="col-sm-6 col-lg-3">
				<div class="sbox-2 wow fadeInUp" data-wow-delay="0.4s">

					<!-- Icon  -->
					<img class="img-85" src="{{url('public')}}/assets-website/images/icons/computer-1.png" alt="feature-icon" />

					<!-- Title -->
					<h5 class="h5-md">{{ucwords($l->layanan_nama)}}</h5>

					<!-- Text -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">
						Cek Sarat
					</button>

				</div>

				<div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">{{ucwords($l->layanan_nama)}}</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								{!!nl2br($l->layanan_syarat)!!}
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach



		</div>	  <!-- End row -->	
	</div>	   <!-- End container -->		
</section>	<!-- END SERVICES-2 -->	

@endsection