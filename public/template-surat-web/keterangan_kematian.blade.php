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
			</td>
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
			<td colspan="3">
				Orang tersebut di atas betul-betul Penduduk Desa Kami di Desa {{$desa->nama}} dan menurut Keterangan dari Ketua RT, Ketua RW dan Kepala Dusunnya 
				juga sepanjang pengetahuan kami ia telah meninggal dunia pada : 
			</td>
		</tr>
		<tr></tr>
		<tr>
			<td>Tanggal Wafat</td>
			<td>:</td>
			<td>{{$surat->param->tanggal}}</td>
		</tr>
		<tr>
			<td>Tempat Meninggal</td>
			<td>:</td>
			<td>{{$surat->param->tempat}}</td>
		</tr>
		<tr>
			<td>Tempat Pemakaman</td>
			<td>:</td>
			<td>{{$surat->param->tempat_pemakaman}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">
				Orang tersebut diatas adalah anak dari {{$penduduk->nama_ayah}} dan {{$penduduk->nama_ibu}}
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>Demikian Surat Keterangan ini kami buat dengan sebenarnya, untuk dapat dipergunakan sebagaimana mestinya.</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
	</table>
	@include('admin.surat.cetak._template.ttd')
</div>
