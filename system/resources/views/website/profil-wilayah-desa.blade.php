@extends('website.template.base')
@section('content')




<section id="single-post" class="wide-100 single-post-section division">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="single-post-title text-center mb-40">
					<h3 class="h3-sm">Profil Wilayah Desa </h3>
				</div>
				<div class="single-post-txt">
					{!!nl2br($pengaturan->embed_maps)!!}

					{!!nl2br($profil->profil_wilayah_desa)!!}
				</div>
			</div>
		</div>
	</div>
</section>



@endsection