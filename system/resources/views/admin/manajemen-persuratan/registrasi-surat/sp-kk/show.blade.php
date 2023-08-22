@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">
@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h2>Manajemen Surat</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
				<li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Kumpulan Surat</a></li>                            
				<li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat', $template->nama_file)}}">{{$template->nama_surat}}</a></li>                            
				<li class="breadcrumb-item active">Detail</li>
			</ul>
		</div>
	</div>
</div>
<!-- akhir breadcrumb -->

<div class="card mt-3">
	<div class="card-body">
		<div class="col-md-12">
			<a href="{{url('orisinalitas/surat-pengantar-kk',$detail->kode_token)}}" target="_blank" class="btn btn-primary">Cek Orisinalitas</a>
			<a href="{{url('')}}" class="btn btn-dark">Cetak Surat</a>

			@if(Auth::user()->level == 2 AND $detail->status == 0)

			<a href="{{url('admin/manajemen-persuratan/registrasi-surat/surat-pengantar-kk',$detail->kode_token)}}/ttd" class="btn btn-success float-right"><i class="fa fa-qrcode"></i> TTD Surat</a>
			@endif
		</div>
	</div>
</div>

<div class="card mt-1">
	<div class="card-body">
		<div class="container">
			@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.kop')
			<table>
				<thead>
					<th width="30%"></th>
					<th width="2%"></th>
					<th width="68%"></th>
				</thead>
				<tr>
					<td colspan="3">Yang bertanda tangan di bawah ini :</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>
						{{ucwords($kades->nama)}}
					</tr>
					<tr>
						<td>Jabatan</td>
						<td>:</td>
						<td>Kepala Desa {{$desa->nama_desa}}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>
							{{ucwords(App\Models\Pengaturan::first()->alamat)}}
						</td>
					</tr>
					<tr></tr>
					<tr>
						<td colspan="3">Menerangkan dengan sesungguhnya : </td>
					</tr>
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td>{{$penduduk->nik}}</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ucwords($penduduk->nama_lengkap)}}</td>
					</tr>
					<tr>
						<td>Tempat dan Tanggal Lahir</td>
						<td>:</td>
						<td>{{$penduduk->tempat_lahir}}, {{$penduduk->tanggal_lahir}}</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>{{$penduduk->jenis_kelamin}}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{$penduduk->alamat_lengkap}}</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>{{$penduduk->agama}}</td>
					</tr>
					<tr>
						<td>Status Perkawinan</td>
						<td>:</td>
						<td>{{$penduduk->status_pernikahan}}</td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td>{{$penduduk->jenis_pekerjaan}}</td>
					</tr>
					<tr>
						<td>Kewarganegaraan</td>
						<td>:</td>
						<td>{{$penduduk->kewarganegaraan}}</td>
					</tr>
					<tr>
						<td>Tujuan</td>
						<td>:</td>
						<td>Dinas Kependudukan dan Pencatatan Sipil</td>
					</tr>
					<tr>
						<td>Keperluan</td>
						<td>:</td>
						<td>Membuat Kartu Keluarga (KK)</td>
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td colspan="3">{{$template->isi}}</td>
					</tr>
					<tr>
						
					</tr>
				</table>
				<div id="ttd">
					{{$desa->nama}}, {{strftime("%d %B %Y", time())}}  <br>
					KEPALA DESA SUKA MULIA <br>
					@if($detail->status == 1)
					&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{!! QrCode::size(100)->generate(url('orisinalitas/surat-keterangan-domisili',$detail->kode_token)); !!} <br>
					&nbsp; &nbsp; &nbsp;{{strtoupper($kades->nama)}}
					@endif

					<br>

				</u></b>
			</div>


		</div>
	</div>
</div>

@endsection
