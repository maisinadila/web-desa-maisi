@extends('admin.template.base')
@section('content')


<!-- breadcrumb -->
<div class="block-header">
	<div class="row">
		<div class="col-12">
			<h2>Jenis Pekerjaan</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
				<li class="breadcrumb-item active">Jenis Pekerjaan</li>
			</ul>
		</div>
	</div>
</div>
<!-- akhir breadcrumb -->

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="d-flex flex-row-reverse">
			<div class="page_action">

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Tambah Kategori Pekerjaan
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Pekerjaan </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{url('admin/data-desa/pekerjaan/create')}}" method="post">
									@csrf
									<input type="text" class="form-control" name="pekerjaan" required>
									<button class="btn btn-primary mt-3">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
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
				<h2>Data Pekerjaan</h2>                            
			</div>
			<div class="body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pekerjaan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama Pekerjaan</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($list_pekerjaan as $p)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{strtoupper($p->nama_pekerjaan)}}</td>
								<td>
									<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$p->pekerjaan_id}}">
										Ubah
									</button>


									<!-- Modal -->
									<div class="modal fade" id="exampleModal{{$p->pekerjaan_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Ubah Kategori Pekerjaan </h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="{{url('admin/data-desa/pekerjaan',$p->pekerjaan_id)}}/update" method="post">
														@csrf
														@method("put")
														<input type="text" class="form-control" name="pekerjaan" required value="{{strtoupper($p->nama_pekerjaan)}}">
														<button class="btn btn-primary mt-3">Simpan</button>
													</form>
												</div>
											</div>
										</div>
									</div>
									<a href="{{url('admin/data-desa/pekerjaan',$p->pekerjaan_id)}}/delete" onclick="return confirm('Yakin menghapus pekerjaan ini?')" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script>

	new DataTable('#table');
</script>


@endsection