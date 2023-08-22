<div class="container">
	@include('admin.surat.cetak._template.kop')
	<table>
		<thead>
			<th width="10%"></th>
			<th width="20%"></th>
			<th width="2%"></th>
			<th width="68%"></th>
		</thead>
		<tr>
			<td colspan="4">Pemerintah Desa {{$desa->nama}} Kecamatan {{$desa->kecamatan}} Kabupaten Ketapang, menerangkan dengan sebenarnya :</td>
		</tr>
		<tr>
			<td colspan="4">
				Pada Hari {{strftime("%A, Tanggal %d %B %Y", strtotime($surat->created_at))}} kedatangan seorang warga : 
			</td>
		</tr>
		<tr>
			<td colspan="2">NIK</td>
			<td>:</td>
			<td>{{$penduduk->nik}}</td>
		</tr>
		<tr>
			<td colspan="2">Nama</td>
			<td>:</td>
			<td>{{$penduduk->nama}}</td>
		</tr>
		<tr>
			<td colspan="2">Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$penduduk->ttl_string}}</td>
		</tr>
		<tr>
			<td colspan="2">Jenis Kelamin</td>
			<td>:</td>
			<td>{{$penduduk->jk_string}}</td>
		</tr>
		<tr>
			<td colspan="2">Pekerjaan</td>
			<td>:</td>
			<td>{{$penduduk->pekerjaan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>Dusun</td>
			<td>:</td>
			<td>{{$penduduk->alamat_dusun}}</td>
		</tr>
		<tr>
			<td></td>
			<td>RT / RW</td>
			<td>:</td>
			<td>{{$penduduk->alamat_rt_rw}}</td>
		</tr>
		<tr>
			<td></td>
			<td>Desa</td>
			<td>:</td>
			<td>{{$desa->nama}}</td>
		</tr>
		<tr>
			<td></td>
			<td>Kecamatan</td>
			<td>:</td>
			<td>{{$desa->kecamatan}}</td>
		</tr>
		<tr>
			<td></td>
			<td>Kabupaten</td>
			<td>:</td>
			<td>{{$desa->kabupaten}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="2">Melapor telah kehilangan</td>
			<td>:</td>
			<td>
				<table class="table table-bordered">
					<thead>
						<th>Jenis Barang</th>
						<th>No Identitas</th>
					</thead>
					<tbody>
						@foreach($surat->param->jenis_barang as $key => $jenis)
							<tr>
								<td>{{$jenis}}</td>
								<td>{{$surat->param->no_identitas[$key]}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="2">Penyebab Kehilangan</td>
			<td>:</td>
			<td>
				{{$surat->param->penyebab_kehilangan}}
			</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="4">Demikian Surat Keterangan Kehilangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya</td>
		</tr>
		<tr></tr>
	</table>
	<table width="100%">
		<thead>
			<th width="40%"></th>
			<th width="20%"></th>
			<th width="40%"></th>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td>{{$desa->nama}}, {{strftime("%d %B %Y", time())}} </td>
			</tr>
			<tr>
				<td>KEPALA DESA {{ strtoupper($desa->nama) }}</td>
				<td></td>
				<td>YANG MELAPOR</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<b><u>
						@if($kepala_desa)
							{{$kepala_desa->penduduk->nama}}
						@else
							<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
						@endif
					</u></b>
				</td>
				<td></td>
				<td>
					<b><u>
						{{$penduduk->nama}}
					</u></b>
				</td>
			</tr>
		</tbody>
	</table>
</div>
