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
				<td>{{$penduduk->tempat_lahir}}, {{$penduduk->tgl_lahir}}</td>
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
			<tr></tr>
			<tr>
				<td colspan="3">Dengan ini menerangkan bahwa orang yang bersangkutan benar tinggal berdomisili di Desa {{$desa->nama_desa}} Kecamatan {{$desa->kecamatan}}</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="3">Demikian surat keterangan domisili ini kami buat sebagaimana perlunya semoga dapat digunakan sebagaimana mestinya. Dan kepada yang berkepentingan agar menjadi maklum</td>
			</tr>
		</table>
		<div id="ttd">
			{{$desa->nama}}, {{strftime("%d %B %Y", time())}}  <br>
			KEPALA DESA SUKA MULIA <br>
			@if($detail->status == 1)
			&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{!! QrCode::size(100)->generate(Request::url()); !!}<br>
			&nbsp; &nbsp; &nbsp;{{strtoupper($kades->nama)}}
			@endif

			<br>
			
			</u></b>
		</div>

	</div>
	<script>
		window.print();
	</script>

