@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header">
	<div class="row">
		<div class="col-12">
			<h2>Detail Kartu Keluarga</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
				<li class="breadcrumb-item active">Detail Kartu Keluarga</li>
			</ul>
		</div>
	</div>
</div>
<!-- akhir breadcrumb -->

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="">
			<div class="p-2 d-flex">
				<div class="card">
					<div class="card-body">
						<span>Data Kartu Keluarga</span>
						<div class="table-responsive">
							<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
								<thead>
									<tr>
										<th>No KK</th>
										<th>Kepala Keluarga</th>
										<th>Alamar</th>
										<th>RT/RW</th>
										<th>Desa</th>
										<th>Kode POS</th>
										<th>Kecamatan</th>
										<th>Kabupaten</th>
										<th>Provinsi</th>
										<th>Aksi</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{$detail->no_kk}}</td>
										<td>{{ucwords($detail->kepala->nama_lengkap)}}</td>
										<td>{{ucwords($detail->alamat)}}</td>
										<td>{{$detail->rt}}/{{$detail->rw}}</td>
										<td>{{ucwords($detail->desa)}}</td>
										<td>{{$detail->kode_pos}}</td>
										<td>{{ucwords($detail->kecamatan)}}</td>
										<td>{{ucwords($detail->kabupaten)}}</td>
										<td>{{ucwords($detail->provinsi)}}</td>
										<td><a href="" class="btn btn-warning">Edit</a></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="">
			<div class="p-2 d-flex">
				<div class="card">
					<div class="card-body">
						<span>Data Anggota Keluarga</span>

						<a href="{{url('admin/data-desa/penduduk',$detail->no_kk)}}/tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Anggota Keluarga</a>
						<div class="table-responsive">
							<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
								<thead>
									<tr>
										<th>Nama Lengkap</th>
										<th>NIK</th>
										<th>Status Hubungan</th>
										<th>Jenis Kelamin</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Agama</th>
										<th>Pendidikan</th>
										<th>Jenis Pekerjaan</th>
										<th>Golongan Darah</th>
										<th>Status Pernikahan</th>
										<th>Kewarganegaraan</th>
										<th>No Paspor</th>
										<th>No Kitap</th>
										<th>Nama Ayah</th>
										<th>Nama Ibu</th>
										<th>Aksi</th>

									</tr>
								</thead>
								<tbody>
									@foreach($list_anggota->sortByDesc('penduduk_id') as $s)
									<tr>
										<th>{{ucwords($s->nama_lengkap)}}</th>
										<th>{{$s->nik}}</th>
										<th>{{ucwords($s->status_hubungan_dalam_keluarga)}}</th>
										<th>{{$s->jenis_kelamin}}</th>
										<th>{{ucwords($s->tempat_lahir)}}</th>
										<th>{{$s->tanggal_lahir}}</th>
										<th>{{$s->agama}}</th>
										<th>{{$s->pendidikan}}</th>
										<th>{{$s->jenis_pekerjaan}}</th>
										<th>{{$s->golongan_darah}}</th>
										<th>{{ucwords($s->status_pernikahan)}}</th>
										<th>{{$s->kewarganegaraan}}</th>
										<th>{{$s->no_paspor}}</th>
										<th>{{ucwords($s->kitap)}}</th>
										<th>{{ucwords($s->ayah)}}</th>
										<th>{{ucwords($s->ibu)}}</th>
										<th>
											<div class="btn-group">
											<a href="{{url('admin/data-desa/penduduk',$s->penduduk_id)}}/edit" class="btn btn-warning">Edit</a>
											<a href="{{url('admin/data-desa/penduduk',$s->penduduk_id)}}/hapus" onclick="return confirm('Yakin menghapus penduduk ini?')" class="btn btn-danger">Hapus</a>
											</div>
										</th>
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
	
</div>

@endsection