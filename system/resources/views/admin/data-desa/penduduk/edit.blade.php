@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header">
	<div class="row">
		<div class="col-12">
			<h2>Data Penduduk</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
				<li class="breadcrumb-item active">Penduduk</li>
			</ul>
		</div>
	</div>
</div>
<!-- akhir breadcrumb -->


<div class="card">
	<form action="{{url('admin/data-desa/penduduk',$detail->penduduk_id)}}/update" method="post">
		<div class="card-body">
			<div class="row">
				@csrf
				@method('PUT')

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="text" name="nama_lengkap" placeholder="Nama Kepala Keluarga *" value="{{ucwords($detail->nama_lengkap)}}" class="form-control" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="text" name="nik" placeholder="NIK *" maxlength="16" value="{{$detail->nik}}" class="form-control" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="jenis_kelamin" id="" required class="form-control">
							<option value="{{$detail->jenis_kelamin}}" hidden>{{$detail->jenis_kelamin}}</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="text" name="tempat_lahir" value="{{$detail->tempat_lahir}}" placeholder="Tempat Lahir" class="form-control" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir *" value="{{$detail->tanggal_lahir}}" class="form-control" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="agama" id="" required class="form-control">
							<option value="{{$detail->agama}}" hidden> {{$detail->agama}}</option>
							@foreach(App\Models\Agama::all() as $a)
							<option value="{{$a->agama_nama}}">{{$a->agama_nama}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="pendidikan" id="" required class="form-control">
							<option value="{{$detail->pendidikan}}" hidden>{{$detail->pendidikan}}</option>
							@foreach(App\Models\Pendidikan::all() as $a)
							<option value="{{strtoupper($a->pendidikan)}}">{{strtoupper($a->pendidikan)}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="pekerjaan" id="" required class="form-control">
							<option value="{{$detail->jenis_pekerjaan}}" hidden>{{$detail->jenis_pekerjaan}} </option>
							@foreach(App\Models\Pekerjaan::all() as $a)
							<option value="{{$a->nama_pekerjaan}}">{{$a->nama_pekerjaan}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="golongan_darah" id="" required class="form-control">
							<option value="{{$detail->golongan_darah}}" hidden> {{$detail->golongan_darah}}</option>
							<option value="A+">A+</option>
							<option value="B+">B+</option>
							<option value="AB+">AB+</option>
							<option value="O">O</option>
							<option value="A-">A-</option>
							<option value="B-">B-</option>
							<option value="AB-">AB-</option>
							<option value="0-">O-</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="status_pernikahan" id="" required class="form-control">
							<option value="{{$detail->status_pernikahan}}" hidden>{{$detail->status_pernikahan}}</option>
							<option value="Kawin Tercatat">Kawin Tercatat</option>
							<option value="Belum Kawin">Belum Kawin</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="status_hubungan_dalam_keluarga" id="" required class="form-control">
							<option value="{{$detail->status_hubungan_dalam_keluarga}}" hidden>{{$detail->status_hubungan_dalam_keluarga}}</option>
							@foreach($status_hubungan as $s)
							<option value="{{$s->status}}">{{ucwords($s->status)}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<select name="kewarganegaraan" id="" required class="form-control">
							<option value="{{$detail->kewarganegaraan}}" hidden>{{$detail->kewarganegaraan}}</option>
							<option value="WNI">WNI</option>
							<option value="WNA">WNA</option>
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="text" name="no_paspor" placeholder="Nomor Passport" value="{{$detail->no_paspor}}" class="form-control" >
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="text" name="no_kitap" value="{{$detail->no_kitap}}" placeholder="Nomor KITAP" class="form-control" >
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="text" name="ayah" placeholder="Nama Ayah *" value="{{$detail->ayah}}" class="form-control" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group form-float">
						<input type="text" name="ibu" placeholder="Nama Ibu *" value="{{$detail->ibu}}" class="form-control" required>
					</div>
				</div>

				<div class="col-md-12">
					<button class="btn btn-primary">UPDATE</button>
				</div>

			</div>
		</div>
	</form>
</div>


@endsection