@include('admin.surat.cetak._template.style')	
<script>
	window.print();
</script>
<table>
	<tr>
		<td rowspan="4" class="logo-container">
			<img src="{{$cdn_url}}/frontend/images/logo.png">
		</td>
		<td>
			<div class="kop kop-1">
				PEMERINTAH DESA {{strtoupper($desa->nama)}}
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
				KABUPATEN KETAPANG
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
<div class="nama_surat">
	<b><u>{{$kategori->judul or "SURAT PENGANTAR"}}</u></b>
</div>
<div class="nama_surat nomor_surat">
	NOMOR : {{$surat->getNomorSurat()}}
</div>