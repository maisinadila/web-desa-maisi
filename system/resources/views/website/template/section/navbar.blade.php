<ul class="wsmenu-list">
	<li class="nl-simple" aria-haspopup="true"><a href="{{url('/')}}">Beranda</a></li>
	<li aria-haspopup="true"><a href="#">Profil Desa <span class="wsarrow"></span></a>
		<div class="wsmegamenu clearfix halfmenu">
			<div class="container-fluid">
				<div class="row">

					<!-- Links -->
					<ul class="col-lg-12 col-md-12 col-xs-12 link-list">
						<li><a href="{{url('profil-wilayah-desa')}}">Profil Wilayah Desa</a></li>
						<li><a href="{{url('visi-misi-desa')}}">Visi dan Misi Desa</a></li>
						<li><a href="{{url('kepala-desa-dan-sambutan')}}">Kepala Desa & Sambutan</a></li>
						<li><a href="{{url('perangkat-desa')}}">Perangkat Desa</a></li>
						<li><a href="{{url('struktur-organisasi-desa')}}">Struktur Organisasi Desa</a></li>
					</ul>


				</div>
			</div>
		</div>
	</li>	

	<li aria-haspopup="true"><a href="#">Informasi Desa <span class="wsarrow"></span></a>
		<div class="wsmegamenu clearfix halfmenu">
			<div class="container-fluid">
				<div class="row">

					<!-- Links -->
					<ul class="col-lg-12 col-md-12 col-xs-12 link-list">
						<li><a href="{{url('layanan-desa')}}">Layanan Desa</a></li>
						<li><a href="{{url('program-desa')}}">Program Desa</a></li>
						<li><a href="{{url('peraturan-desa')}}">Peraturan Desa</a></li>
					</ul>


				</div>
			</div>
		</div>
	</li>	

	<li aria-haspopup="true"><a href="#">Data Desa <span class="wsarrow"></span></a>
		<div class="wsmegamenu clearfix halfmenu">
			<div class="container-fluid">
				<div class="row">

					<!-- Links -->
					<ul class="col-lg-12 col-md-12 col-xs-12 link-list">
						<li><a href="{{url('data-penduduk')}}">Data Penduduk</a></li>
						<li><a href="{{url('data-pendidikan')}}">Data Pendidikan</a></li>
						<li><a href="{{url('data-pekerjaan')}}">Data Pekerjaan</a></li>	
						<li><a href="{{url('data-agama')}}">Data Agama</a></li>	

						<!-- <li><a href="{{url('data-dusun')}}">Data Dusun</a></li>		 -->

						<!-- <li><a href="{{url('inventaris-desa')}}">Inventaris Desa</a></li> -->
						<!-- <li><a href="{{url('data-serapan-anggaran')}}">Data Serapan Anggaran</a></li>     	                     -->
					</ul>



				</div>
			</div>
		</div>
	</li>	


	<li class="nl-simple" aria-haspopup="true"><a href="{{url('realisasi-anggaran')}}">Laporan Realisasi Anggaran</a></li>
	<li aria-haspopup="true"><a href="#">Publikasi <span class="wsarrow"></span></a>
		<div class="wsmegamenu clearfix">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-3">
						<h3 class="title">Publikasi Desa:</h3>  

						<ul class="link-list">   						                    
							<li><a href="{{url('berita-desa')}}">Berita Desa</a></li>
							<li><a href="{{url('galeri-desa')}}">Galeri Desa</a></li>	
							<li><a href="{{url('informasi-desa')}}">Informasi Desa</a></li>
						</ul>

					</div>	
					<div class="col-md-12 col-lg-5">

						@foreach(App\Models\Berita::all()->take(1)->sortByDesc('berita_id') as $b)
						<!-- Title -->
						<h3 class="title">Berita Terabru:</h3>

						<!-- Image -->
						<div class="fluid-width-video-wrapper mb-15"><img src="{{url('public/web/berita',$b->berita_cover)}}" alt="featured-news" /></div>

						<!-- Text -->
						<h5 class="h5-md">
							<a href="{{url('berita-desa',$b->berita_id)}}">{{ucwords(Str::limit($b->berita_judul,30))}}
							</a>
						</h5>
						@endforeach
					</div>

					<div class="col-md-12 col-lg-4">

						<!-- Title -->
						<h3 class="title">Latest News:</h3>

						<!-- Latest News -->
						<ul class="latest-news">

							<!-- Post #1 -->
							@foreach(App\Models\Berita::all()->take(3)->skip(1)->sortByDesc('berita_id') as $b)
							<li class="clearfix d-flex align-items-center">

								<!-- Image -->
								<img class="img-fluid" src="{{url('public/web/berita',$b->berita_cover)}}" alt="blog-post-preview" />

								<!-- Text -->
								<div class="post-summary">
									<a href="{{url('berita-desa',$b->berita_id)}}">{{ucwords(Str::limit($b->berita_judul,30))}}</a>
									<p>{{$b->created_at}}</p>
								</div>

							</li>
							@endforeach
						</ul>
					</div>


				</div> 
			</div> 
		</div> 
	</li>

	<li class="nl-simple" aria-haspopup="true">
		<a href="{{url('login')}}" class="btn btn-primary tra-white-hover last-link">Masuk</a>
	</li>