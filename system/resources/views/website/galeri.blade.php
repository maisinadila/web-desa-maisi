@extends('website.template.base')
@section('content')


<section id="blog-2" class="bg-lightgrey wide-60 blog-section division">				
	<div class="container">


		<!-- BLOG POSTS -->
		<div class="row">
			<div class="col-md-12 reviews-grid">
				<div class="masonry-wrap grid-loaded">


					@foreach($list_galeri->sortByDesc('galeri_id') as $b)
					<div class="masonry-item">
						<div class="blog-post">

							<!-- BLOG POST IMAGE -->
							<div class="blog-post-img">
								<img class="img-fluid" src="{{url('public')}}/web/galeri/{{$b->galeri_foto}}" alt="blog-post-image" />
							</div>

							<!-- BLOG POST TEXT -->
							<div class="blog-post-txt">

								<!-- Post Tag -->
								<p class="post-read"><i class="far fa-clock"></i> {{$b->created_at->diffForHumans()}}</p>

								<!-- Post Link -->
								<h5 class="h5-md">
									<a href="single-post.html">{{ucwords($b->galeri_caption)}}
									</a>
								</h5>


							</div>	<!-- END BLOG POST TEXT -->

						</div>
					</div>	
					@endforeach


				</div>
			</div>
		</div>	<!-- END BLOG POSTS -->


	</div>	   <!-- End container -->		
</section>	<!-- END BLOG-2 -->



@endsection