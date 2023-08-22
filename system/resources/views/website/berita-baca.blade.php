@extends('website.template.base')
@section('content')

<section id="single-post" class="wide-100 single-post-section division">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">


				<!-- SINGLE POST TITLE -->
				<div class="single-post-title text-center mb-40">

					<!-- Post Title -->
					<h3 class="h3-sm">{{ucwords($detail->berita_judul)}}</h3>

					<!-- Post Data -->
					<div class="single-post-data">
						<p class="post-meta">Dibuat Oleh Admin  <br>
							<a href="#">Pada </a> {{$detail->created_at->format('d M Y')}} <br>
							<a href="#"><i class="fa fa-eye"></i> {{$detail->berita_viewers}}</a>
						</p>
					</div>

				</div>	<!-- END SINGLE POST TITLE -->


				<!-- BLOG POST TEXT -->
				<div class="single-post-txt mb-45">
					<center>
						<img src="{{url('public/web/berita',$detail->berita_cover)}}" width="70%" alt="">
					</center>
					<!-- Post Text -->
					<p class="p-md">{!!nl2br($detail->berita_isi)!!}
					</p>

				</div>
			</div>
		</div>
	</div>
</section>




@endsection