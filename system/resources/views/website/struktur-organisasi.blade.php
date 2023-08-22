@extends('website.template.base')
@section('content')


<section id="single-post" class="wide-100 single-post-section division">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="single-post-title text-center mb-40">
					<h3 class="h3-sm">Struktur Organisasi Desa </h3>
				</div>
				<div class="single-post-txt">
				<img src="{{url('public')}}/struktur-organisasi/{{$profil->struktur_organisasi}}" width="100%" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


@endsection