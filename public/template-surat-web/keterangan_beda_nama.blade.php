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
			<td colspan="3">Menerangkan dengan sesungguhnya : </td>
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
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$penduduk->pekerjaan->nama}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">
				<ol>
					<li>
						Yang bersangkutan tersebut di atas adalah benar-benar pada saat sekarang 
						berdomisili di Desa {{$desa->nama}} Kecamatan {{$desa->kecamatan}} 
						Kabupaten {{$desa->kabupaten}} sebagaimana tesebut di atas.
					</li>
					<li>
						Bahwa nama pada Kartu Tanda Penduduk dengan No {{$surat->penduduk->nik}} tertulis {{$surat->penduduk->nama}} 
						Sedangkan pada {{$surat->param->keterangan}} tertulis nama {{$surat->param->nama}}.
					</li>
					<li>
						
						Bahwa Nama {{$surat->penduduk->nama}} dan {{$surat->param->nama}} adalah orang yang sama (satu orang)
					</li>
				</ol>
			</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">Demikian Surat Keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</td>
		</tr>
	</table>
	@include('admin.surat.cetak._template.ttd')
</div>
