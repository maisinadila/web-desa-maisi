@extends('website.template.base')
@section('content')




<section id="single-post" class="wide-100 single-post-section division">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="single-post-title text-center mb-40">
					<h3 class="h3-sm">Visi Misi Desa </h3>
				</div>
			</div>

			<div class="col-md-6">
				<h3>Visi</h3>
				{!!nl2br($profil->visi)!!}
			</div>
			<div class="col-md-6">
				<h3>Misi</h3>
				{!!nl2br($profil->misi)!!}
			</div>
		</div>
	</div>
</section>



@endsection