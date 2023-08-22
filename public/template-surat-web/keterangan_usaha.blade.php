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
		<tr></tr>
		<tr>
			<td colspan="3">
				Nama yang tersebut di atas adalah benar penduduk yang berdomisili di Dusun {{$penduduk->alamat_dusun}} 
				RT/RW {{$penduduk->alamat_rt_rw}} Desa {{$desa->nama}} Kecamatan {{$desa->kecamatan}} Kabupaten Ketapang.
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td colspan="3">
				Berdasarkan pengamatan kami bahwa nama tersebut di atas adalah benar memiliki usaha {{$surat->param->usaha}} 
				di wilayah {{$surat->param->wilayah}}. Adapun penghasilan rata-rata sebesar Rp. {{number_format($surat->param->penghasilan)}}
			</td>
		</tr>
		<tr>
			<td colspan="3">Demikian Surat Keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</td>
		</tr>
	</table>
	@include('admin.surat.cetak._template.ttd')
</div>
