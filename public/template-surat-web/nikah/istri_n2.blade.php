<div class="container page-break">
	@include('admin.surat.cetak.nikah.kop')
	<table>
		<thead>
			<th width="40%"></th>
			<th width="2%"></th>
			<th width="40%"></th>
			<th></th>
		</thead>
		<tbody>
			<tr>
				<td>KANTOR DESA/KELURAHAN</td>
				<td>:</td>
				<td>{{$desa->nama}}</td>
				<td class="text-right">Model N2</td>
			</tr>
			<tr>
				<td>KECAMATAN</td>
				<td>:</td>
				<td>{{$desa->kecamatan}}</td>
				<td></td>
			</tr>
			<tr>
				<td>KABUPATEN/KOTA</td>
				<td>:</td>
				<td>{{$desa->kabupaten}}</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<div class="nama_surat">
		<b><u>SURAT KETERANGAN ASAL USUL</u></b>
	</div>
	<div class="nama_surat nomor_surat">
		NOMOR : {{$istri_n2->getNomorSurat()}}
	</div>
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
				@if($kepala_desa)
					{{$kepala_desa->penduduk->nama}}
				@else
					<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
				@endif
			</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td>Kepala Desa {{$desa->desa}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				@if($kepala_desa)
					{{$kepala_desa->penduduk->alamat_lengkap}}
				@else
					<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
				@endif
			</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">Menerangkan dengan sesungguhnya : </td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td>{{$istri->nik}}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$istri->nama}}</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$istri->ttl_string}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$istri->jk_string}}</td>
		</tr>
		<tr>
			<td>Warga Negara</td>
			<td>:</td>
			<td>{{$istri->kewarganegaraan_string}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$istri->agama_string}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$istri->pekerjaan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$istri->alamat_lengkap}}</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td colspan="3">Adalah benar anak kandung dari pernikahan seorang pria : </td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$istri->ayah->nama}}</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$istri->ayah->ttl_string}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$istri->ayah->jk_string}}</td>
		</tr>
		<tr>
			<td>Warga Negara</td>
			<td>:</td>
			<td>{{$istri->ayah->kewarganegaraan_string}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$istri->ayah->agama_string}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$istri->ayah->pekerjaan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$istri->ayah->alamat_lengkap}}</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td colspan="3">Dengan seorang wanita : </td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$istri->ibu->nama}}</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$istri->ibu->ttl_string}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$istri->ibu->jk_string}}</td>
		</tr>
		<tr>
			<td>Warga Negara</td>
			<td>:</td>
			<td>{{$istri->ibu->kewarganegaraan_string}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$istri->ibu->agama_string}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$istri->ibu->pekerjaan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$istri->ibu->alamat_lengkap}}</td>
		</tr>
		<tr></tr>
		<tr></tr>
	</table>
	@include('admin.surat.cetak._template.ttd')
</div>