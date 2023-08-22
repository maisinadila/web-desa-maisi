<div class="container">
	@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.kop')
	<table>
		<tr>
			<td width="8%">
				Perihal
			</td>
			<td width="2%"> : </td>
			<td width="50%">Mohon Surat Izin</td>
			<td>
				Kepada, <br>
				Yth, Bpk. KAPOLPOS SEKTOR <br>
				{{strtoupper($desa->kecamatan)}} <br>
				Di - <br>
				TEMPAT
			</td>
		</tr>
	</table>
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
			<td>{{$penduduk->nik}}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$penduduk->nama}}</td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td>{{$penduduk->umur." Tahun"}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$penduduk->agama_string}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$penduduk->pekerjaan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$penduduk->alamat_lengkap}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">Surat Pengantar ini diberikan untuk keperluan : </td>
		</tr>
		<tr>
			<td  colspan="3">Untuk Memohon diterbitkan Surat Izin Keramaian {{$surat->param->keramaian}} Dalam Rangka {{$surat->param->rangka}} pada hari :</td>
		</tr>
		<tr>
			<td>Hari / Tanggal </td>
			<td> : </td>
			<td>{{$surat->param->tanggal}}</td>
		</tr>
		<tr>
			<td>Waktu </td>
			<td> : </td>
			<td>{{$surat->param->waktu}}</td>
		</tr>
		<tr>
			<td>Tempat </td>
			<td> : </td>
			<td>{{$surat->param->tempat}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">Demikian surat ini diberikan untuk dapat dipergunakan sebagaimana mestinya. </td>
		</tr>
	</table>
	@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.ttd')
</div>
