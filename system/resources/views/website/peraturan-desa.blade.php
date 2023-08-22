@extends('website.template.base')
@section('content')




<section id="single-post" class="wide-100 single-post-section division">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="single-post-title text-center ">
					<h3 class="h3-sm">Peraturan Desa </h3>
				</div>
				<div class="single-post-txt">
					{!!nl2br($profil->peraturan_desa)!!}
				</div>
			</div>
		</div>
	</div>
</section>



@endsection