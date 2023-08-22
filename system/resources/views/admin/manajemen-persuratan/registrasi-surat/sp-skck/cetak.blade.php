<div class="container">
	@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.kop')
	<table>
		<thead>
			<th width="30%"></th>
			<th width="2%"></th>
			<th width="68%"></th>
		</thead>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$penduduk->nama}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$penduduk->jk_string}}</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$penduduk->ttl_string}}</td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td>:</td>
			<td>{{$penduduk->kewarganegaraan_string}}</td>
		</tr>
		<tr>
			<td>Status Perkawinan</td>
			<td>:</td>
			<td>{{$penduduk->status_kawin_string}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$penduduk->pekerjaan->nama}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$penduduk->agama_string}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$penduduk->alamat_lengkap}}</td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td>{{$penduduk->nik}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">Yang bersangkutan sepanjang pengetahuan kami dan selama menjadi penduduk / bertempat tinggal di Desa {{$desa->nama}} telah menunjukkan sikap dan perbuatan serta tingkah laku yang baik, juga belum pernah terlibat dalam urusan perkara Kepolisian (kriminal) serta perbuatan yang bersifat melanggar hukum lainnya baik di Desa {{$desa->nama}} maupun di lingkungannya.</td>
		</tr>
		<tr>
			<td colspan="3">
				<ol type="a">
							<li>Surat Keterangan ini bukan jaminan mutlak atas tindakan hukum sewaktu-waktu</li>
							<li>Surat Keterangan ini untuk keperluanyang bersangkutan guna mendapatkan SKCK dari Kepolisian</li>
							<li>Surat Keterangan ini diberikan kepada yang bersangkutan untuk melengkapi persyaratan {{$surat->param->keperluan}}</li>
				</ol>
			</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">{{$template->isi}}</td>
		</tr>
	</table>
	@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.ttd')
</div>
