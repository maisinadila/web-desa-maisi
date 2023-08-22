@extends('website.template.base')
@section('content')

<section id="single-post" class="wide-100 single-post-section division">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="single-post-title text-center mb-40">

					<!-- Post Title -->
					<h3 class="h3-sm">{{ucwords($detail->informasi_judul)}}</h3>

					<!-- Post Data -->
					<div class="single-post-data">
						<p class="post-meta">Dibuat Oleh Admin  <br>
							<a href="#">Pada </a> {{$detail->created_at}} <br>
						</p>
					</div>

				</div>

				<div class="single-post-txt mb-45">
					<center>
						<img src="{{url('public/web/informasi',$detail->informasi_cover)}}" width="70%" alt="">
					</center>
					<p class="p-md">{!!nl2br($detail->informasi_isi)!!}
					</p>

				</div>
			</div>
		</div>
	</div>
</section>

@endsection