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
			<a href="{{url('orisinalitas/surat-keterangan-kehilangan',$detail->kode_token)}}" target="_blank" class="btn btn-primary">Cek Orisinalitas</a>
			<a href="{{url('admin/manajemen-persuratan/registrasi-surat/surat-keterangan-kehilangan', [ $detail->surat_id , 'cetak'])}}" class="btn btn-dark">Cetak Surat</a>
			@if(Auth::user()->level == 2 AND $detail->status == 0)

			<a href="{{url('admin/manajemen-persuratan/registrasi-surat/surat-keterangan-kehilangan',$detail->kode_token)}}/ttd" class="btn btn-success float-right"><i class="fa fa-qrcode"></i> TTD Surat</a>
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
					<th width="10%"></th>
					<th width="20%"></th>
					<th width="2%"></th>
					<th width="68%"></th>
				</thead>
				<tr>
					<td colspan="4">Pemerintah Desa {{$desa->nama}} Kecamatan {{$desa->kecamatan}} Kabupaten Ketapang, menerangkan dengan sebenarnya :</td>
				</tr>
				<tr>
					<td colspan="4">
						Pada Hari  kedatangan seorang warga : 
					</td>
				</tr>
				<tr>
					<td colspan="2">NIK</td>
					<td>:</td>
					<td>{{$penduduk->nik}}</td>
				</tr>
				<tr>
					<td colspan="2">Nama</td>
					<td>:</td>
					<td class="text-capitalize">{{$penduduk->nama_lengkap}}</td>
				</tr>
				<tr>
					<td colspan="2">Tempat dan Tanggal Lahir</td>
					<td>:</td>
					<td>{{$penduduk->tempat_lahir}}, {{$penduduk->tanggal_lahir}}</td>
				</tr>
				<tr>
					<td colspan="2">Jenis Kelamin</td>
					<td>:</td>
					<td>{{$penduduk->jenis_kelamin}}</td>
				</tr>
				<tr>
					<td colspan="2">Pekerjaan</td>
					<td>:</td>
					<td>{{$penduduk->jenis_pekerjaan}}</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>Dusun</td>
					<td>:</td>
					<td>{{$kk->dusun}}</td>
				</tr>
				<tr>
					<td></td>
					<td>RT / RW</td>
					<td>:</td>
					<td>{{$kk->rt}} / {{$kk->rw}}</td>
				</tr>
				<tr>
					<td></td>
					<td>Desa</td>
					<td>:</td>
					<td>{{$kk->desa}}</td>
				</tr>
				<tr>
					<td></td>
					<td>Kecamatan</td>
					<td>:</td>
					<td>{{$kk->kecamatan}}</td>
				</tr>
				<tr>
					<td></td>
					<td>Kabupaten</td>
					<td>:</td>
					<td>{{$kk->kabupaten}}</td>
				</tr>
				<tr></tr>
				<tr>
					<td colspan="2">Melapor telah kehilangan</td>
					<td>:</td>
					<td>
						{{$detail->kehilangan_barang}}
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td colspan="2">Penyebab Kehilangan</td>
					<td>:</td>
					<td>
						{{$detail->alasan_kehilangan}}
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td colspan="3">{{$template->isi}}</td>
				</tr>
				<tr></tr>
			</table>
			<table width="100%">
				<thead>
					<th width="40%"></th>
					<th width="20%"></th>
					<th width="40%"></th>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td>{{$desa->nama}}, {{strftime("%d %B %Y", time())}} </td>
					</tr>
					<tr></tr>
					<tr>
						<td>KEPALA DESA</td>
						<td></td>
						<td>YANG MELAPOR</td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td class="text-capitalize">
							<b>
								{{ucwords($desa->nama_desa)}}, {{strftime("%d %B %Y", time())}}  <br>
								KEPALA DESA SUKA MULIA <br>
								@if($detail->status == 1)
								&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{!! QrCode::size(100)->generate(url('orisinalitas/surat-keterangan-domisili',$detail->kode_token)); !!} <br>
								&nbsp; &nbsp; &nbsp;{{strtoupper($kades->nama)}}
								@endif
							</b>
						</td>
						<td></td>
						<td class="text-capitalize">
							<b><u>
								{{$penduduk->nama_lengkap}}
							</u></b>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
