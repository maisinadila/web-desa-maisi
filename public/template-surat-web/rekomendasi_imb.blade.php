<div class="container">
	@include('admin.surat.cetak._template.kop')
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
			<td colspan="3">Dengan ini memberikan rekomendasi kepada : </td>
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
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$penduduk->ttl_string}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$penduduk->jk_string}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$penduduk->alamat_lengkap}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$penduduk->agama_string}}</td>
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
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td colspan="3">Untuk mengajukan / membuat Surat Ijin Tempat Usaha (SITU), membuka {{$surat->param->usaha}} yang bergerak di bidang {{$surat->param->bidang}} Kepada Bapak Bupati Ketapang.</td>
		</tr>
		<tr>
			<td>Nama Bangunan / Instansi</td>
			<td>:</td>
			<td>{{$surat->param->nama_bangunan}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$surat->param->alamat}}</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan="3">
				Pada prinsipnya di pihak kami tidak merasa keberatan atas permohonan yang bersangkutan sepanjang : 
				<ol>
					<li>Yang bersangkutan wajib memenuhi persayratan yang telah ditentukan oleh Pemerintah Kabupaten Ketapang.</li>
					<li>Rekomendasi ini bukan merupakan ijin tetapi merupakan salah satu syarat untuk mendapatkan Surat Ijin Tempat Usaha (SITU) dari Pemerintah Kabupaten Ketapang.</li>
					<li>Rekomendasi ini selambat-lambatnya 14 (empat belas) hari terhitung mulai tanggal dikeluarkan, yang bersangkutan diwajibkan mengurus pada Pemerintah Kabupaten Ketapang.</li>
				</ol>
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan="3">Demikian Surat Rekomendasi ini dibuat dengan data yang sebenar-benarnya agar dapat digunakan sebagaimana mestinya.</td>
		</tr>
	</table>
	@include('admin.surat.cetak._template.ttd')
</div>
