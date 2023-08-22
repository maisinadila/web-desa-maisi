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

<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="d-flex flex-row-reverse">
		<div class="page_action">
			<button type="button" name="add_dasar" id="add"
			class="btn btn-sm btn-dark mb-3"><i class="fa fa-plus"></i> TAMBAH DATA</button>

		</div>
		<div class="p-2 d-flex">

		</div>
	</div>
</div>







<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="card">
			<div class="header">
				<h2>Advanced Form Example With Validation</h2>
				<ul class="header-dropdown">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="javascript:void(0);">Action</a></li>
							<li><a href="javascript:void(0);">Another Action</a></li>
							<li><a href="javascript:void(0);">Something else</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<form id="wizard_with_validation" action="{{url('admin/data-desa/penduduk/create')}}" method="POST">
					@csrf
					<!-- DATA KARTU KELUARGA -->
					<h3>Data Kartu Keluarga</h3>
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Nomor KK *" name="no_kk" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Alamat *" name="alamat" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-float">
											<input type="text" class="form-control" placeholder="RT *" name="rt" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-float">
											<input type="text" class="form-control" placeholder="RW *" name="rw" required>
										</div>
									</div>
								</div>
								
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="number" class="form-control" placeholder="Kode POS *" name="kode_pos" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Desa/Kelurahan *" name="desa" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Kecamatan *" name="kecamatan" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Kabupaten/Kota *" name="kabupaten" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" class="form-control" placeholder="Provinsi *" name="provinsi" required>
								</div>
							</div>

							

						</div>



						<!-- DATA KARTU KELUARGA -->
						

						


					</fieldset>
					<h3>KEPALA KELUARGA</h3>
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="nama_lengkap_kepala" placeholder="Nama Kepala Keluarga *" class="form-control" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="nik_kepala" placeholder="NIK *" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="jenis_kelamin_kepala" id="" required class="form-control">
										<option value="" hidden> - jenis Kelamin -</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
										<option value="Lainnya">Lainnya</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="tempat_lahir_kepala" placeholder="Tempat Lahir" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="date" name="tanggal_lahir_kepala" placeholder="Tanggal Lahir *" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="agama_kepala" id="" required class="form-control">
										<option value="" hidden> - Agama -</option>
										@foreach(App\Models\Agama::all() as $a)
										<option value="{{$a->agama_nama}}">{{$a->agama_nama}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="pendidikan_kepala" id="" required class="form-control">
										<option value="" hidden> - Pendidikan -</option>
										@foreach(App\Models\Pendidikan::all() as $a)
										<option value="{{strtoupper($a->pendidikan)}}">{{strtoupper($a->pendidikan)}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="pekerjaan_kepala" id="" required class="form-control">
										<option value="" hidden> - Jenis Pekerjaan -</option>
										@foreach(App\Models\Pekerjaan::all() as $a)
										<option value="{{$a->nama_pekerjaan}}">{{$a->nama_pekerjaan}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="golongan_darah_kepala" id="" required class="form-control">
										<option value="" hidden> - Golongan Darah -</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="status_perkawinan_kepala" id="" required class="form-control">
										<option value="" hidden> - Status Perkawinan -</option>
										<option value="Kawin Tercatat">Kawin Tercatat</option>
										<option value="Belum Kawin">Belum Kawin</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="status_hubungan_dalam_keluarga_kepala" id="" required class="form-control">
										<option value="" hidden> - Status Hubungan Dalam Keluarga -</option>
										@foreach($status_hubungan as $s)
										<option value="{{$s->status}}">{{ucwords($s->status)}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="kewarganegaraan_kepala" id="" required class="form-control">
										<option value="" hidden> - Kewarganegaraan -</option>
										<option value="WNI">WNI</option>
										<option value="WNA">WNA</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="no_paspor_kepala" placeholder="Nomor Passport" class="form-control" >
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="no_kitap_kepala" placeholder="Nomor KITAP" class="form-control" >
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="ayah_kepala" placeholder="Nama Ayah *" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="ibu_kepala" placeholder="Nama Ibu *" class="form-control" required>
								</div>
							</div>

						</div>
						
						
					</fieldset>
					<h3>DATA KELUARGA</h3>
					<fieldset>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="nama_lengkap[]" placeholder="Nama Kepala Keluarga *" class="form-control" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="nik[]" placeholder="NIK *" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="jenis_kelamin[]" id="" required class="form-control">
										<option value="" hidden> - jenis Kelamin -</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="text" name="tempat_lahir[]" placeholder="Tempat Lahir" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="date" name="tanggal_lahir[]" placeholder="Tanggal Lahir *" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="agama[]" id="" required class="form-control">
										<option value="" hidden> - Agama -</option>
										@foreach($list_agama as $a)
										<option value="{{$a->agama_id}}">{{strtoupper($a->agama_nama)}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="pendidikan[]" id="" required class="form-control">
										<option value="" hidden> - Pendidikan -</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="jenis_pekerjaan[]" id="" required class="form-control">
										<option value="" hidden> - Jenis Pekerjaan -</option>
										<option value="1">Laki-laki</option>
										<option value="2">Perempuan</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="golongan_darah[]" id="" required class="form-control">
										<option value="" hidden> - Golongan Darah -</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="status_perkawinan[]" id="" required class="form-control">
										<option value="" hidden> - Status Perkawinan -</option>
										<option value="Kawin Tercatat">Kawin Tercatat</option>
										<option value="Belum Kawin">Belum Kawin</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="status_hubungan_dalam_keluarga[]" id="" required class="form-control">
										<option value="" hidden> - Status Hubungan Dalam Keluarga -</option>
										@foreach($status_hubungan as $s)
										<option value="{{$s->status}}">{{ucwords($s->status)}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<select name="kewarganegaraan[]" id="" required class="form-control">
										<option value="" hidden> - Kewarganegaraan -</option>
										<option value="WNI">WNI</option>
										<option value="WNA">WNA</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="date" name="no_paspor[]" placeholder="Nomor Passport" class="form-control" >
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="date" name="no_kitap[]" placeholder="Nomor KITAP" class="form-control" >
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="date" name="ayah[]" placeholder="Nama Ayah *" class="form-control" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group form-float">
									<input type="date" name="ibu[]" placeholder="Nama Ibu *" class="form-control" required>
								</div>
							</div>

						</div>
						

						<div class="row">
							<div class="col-md-12">
								<div id="dynamicTableDasar">

								</div>
							</div>
						</div>

						
						
						<button class="btn btn-success" type="submit">SIMPAN</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script type="text/javascript">
	var i = 0;

	$("#add").click(function() {
		++i;

		var isi_dasar ='<div class="row mt-5 mb-5">'+
		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="text" name="nama_lengkap[]" placeholder="Nama Kepala Keluarga *" class="form-control" required>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="text" name="nik[]" placeholder="NIK *" class="form-control" required>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="jenis_kelamin[]" id="" required class="form-control">'+
		'<option value="" hidden> - jenis Kelamin -</option>'+
		'<option value="1">Laki-laki</option>'+
		'<option value="2">Perempuan</option>'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="text" name="tempat_lahir[]" placeholder="Tempat Lahir" class="form-control" required>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="date" name="tanggal_lahir[]" placeholder="Tanggal Lahir *" class="form-control" required>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="agama[]" id="" required class="form-control">'+
		'<option value="" hidden> - Agama -</option>'+
		'<option value="Laki-laki">Laki-laki</option>'+
		'<option value="Perempuan">Perempuan</option>'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="pendidikan[]" id="" required class="form-control">'+
		'<option value="" hidden> - Pendidikan -</option>'+
		'<option value="Laki-laki">Laki-laki</option>'+
		'<option value="Perempuan">Perempuan</option>'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="jenis_pekerjaan[]" id="" required class="form-control">'+
		'<option value="" hidden> - Jenis Pekerjaan -</option>'+
		'<option value="Laki-laki">Laki-laki</option>'+
		'<option value="Perempuan">Perempuan</option>'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="golongan_darah[]" id="" required class="form-control">'+
		'<option value="" hidden> - Golongan Darah -</option>'+
		'<option value="Laki-laki">Laki-laki</option>'+
		'<option value="Perempuan">Perempuan</option>'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="status_perkawinan[]" id="" required class="form-control">'+
		'<option value="" hidden> - Status Perkawinan -</option>'+
		'<option value="Kawin Tercatat">Kawin Tercatat</option>'+
		'<option value="Belum Kawin">Belum Kawin</option>'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="status_hubungan_dalam_keluarga[]" id="" required class="form-control">'+
		'<option value="" hidden> - Status Hubungan Dalam Keluarga -</option>'+
		'@foreach($status_hubungan as $s)'+
		'<option value="{{$s->status}}">{{ucwords($s->status)}}</option>'+
		'@endforeach'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<select name="kewarganegaraan[]" id=""  class="form-control" required>'+
		'<option value="" hidden> - Kewarganegaraan -</option>'+
		'<option value="WNI">WNI</option>'+
		'<option value="WNA">WNA</option>'+
		'</select>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="date" name="no_paspor[]" placeholder="Nomor Passport" class="form-control" >'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="date" name="no_kitap[]" placeholder="Nomor KITAP" class="form-control" >'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="date" name="ayah[]" placeholder="Nama Ayah *" class="form-control" required>'+
		'</div>'+
		'</div>'+

		'<div class="col-md-6">'+
		'<div class="form-group form-float">'+
		'<input type="date" name="ibu[]" placeholder="Nama Ibu *" class="form-control" required>'+
		'</div><br> <br>'+
		'</div>';
		

		$("#dynamicTableDasar").append(isi_dasar);
	});


</script>


@endsection