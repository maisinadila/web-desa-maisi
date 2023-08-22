@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.style')	
<script>
	window.print();
</script>
<table>
	<tr>
		<td rowspan="4" class="logo-container">
			<img src="{{url('public/img/logo.jpg')}}">
		</td>
		<td>
			<div class="kop kop-1">
				PEMERINTAH KABUPATEN KETAPANG
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="kop kop-1">
				KECAMATAN {{strtoupper($desa->kecamatan)}}
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="kop kop-2">
				DESA {{strtoupper($desa->nama)}}
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="kop kop-2">
				Alamat :{{ucwords($desa->alamat." Kode Pos ".$desa->kode_pos)}}
			</div>
		</td>
	</tr>
</table>
<div class="garis"></div>