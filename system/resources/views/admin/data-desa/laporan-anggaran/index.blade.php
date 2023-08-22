@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header">
	<div class="row">
		<div class="col-12">
			<h2>Manajemen Galeri</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
				<li class="breadcrumb-item active">Manajemen Galeri</li>
			</ul>
		</div>
	</div>
</div>
<!-- akhir breadcrumb -->

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="d-flex flex-row-reverse">
			<div class="page_action">
				<a href="#largeModal" data-toggle="modal" data-target="#largeModal" class="btn btn-primary">
					Buat Laporan Realisasi Anggaran
				</a> 

				<!-- Large Size -->
				<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="title" id="largeModalLabel">Buat Laporan Anggaran</h4>
							</div>
							<div class="modal-body">
								<form action="{{url('admin/data-desa/laporan-realisasi-anggaran/create')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<span>Judul Laporan</span>
										<input type="text" required placeholder="Judul Laporan" name="judul" class="form-control">
									</div>

									<div class="form-group">
										<span>Tahun Laporan</span>
										<input type="number" required placeholder="Tahun Laporan" name="tahun" class="form-control">
									</div>

									<div class="form-group">
										<span>Judul Laporan</span>
										<input type="file" name="file" required class="form-control">
									</div>

									<div class="form-group">
										<button class="btn btn-primary" type="submit">Simpan</button>
									</div>
								</form>
							 </div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="p-2 d-flex">

			</div>
		</div>
	</div>
</div>



<div class="row clearfix">
	<div class="col-lg-12">
		<div class="card">
			<div class="header">
				<h2>Basic Table <small>Basic example without any additional modification classes</small> </h2>                            
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
						<thead class="bg-secondary text-white">
							<tr>
								<th>No</th>
								<th>Judul Laporan</th>
								<th>Tahun Anggaran</th>
								<th>File</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($list_laporan->sortByDesc('laporan_id')->sortByDesc('tahun') as $l)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{ucwords($l->judul)}}</td>
								<td class="text-center">{{$l->tahun}}</td>
								<td class="text-center">
									<a href="{{url('public')}}/{{$l->file}}" target="_blank" download="" class="btn btn-dark"><i class="fa fa-download"></i> Download</a>
								</td>
								<td class="text-center">
									@include('admin.template.utils.delete', ['url' => url('admin/data-desa/laporan-realisasi-anggaran/delete', $l->laporan_id)])
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot class="bg-secondary text-white"> 
							<tr>
								<th>No</th>
								<th>Judul Laporan</th>
								<th>Tahun Anggaran</th>
								<th>File</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


@endsection