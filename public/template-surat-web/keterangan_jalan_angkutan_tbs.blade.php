<div class="container">
	@include('admin.surat.cetak._template.kop')
	<table>
		<thead>
			<th width="35%"></th>
			<th width="2%"></th>
			<th width="63%"></th>
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
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>Nama Kendaraan</td>
			<td>:</td>
			<td>{{$surat->param->nama_kendaraan}}</td>
		</tr>
		<tr>
			<td>No. Polisi / KB </td>
			<td>:</td>
			<td>{{$surat->param->no_polisi}}</td>
		</tr>
		<tr>
			<td>Nama Driver </td>
			<td>:</td>
			<td>{{$surat->param->nama_driver}}</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td><b>Mitra Kerja (Penjual)</b></td>
			<td>:</td>
			<td></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$surat->param->mitra_nama}}</td>
		</tr>
		<tr>
			<td>Alamat </td>
			<td>:</td>
			<td>{{$surat->param->nama_driver}}</td>
		</tr>
		<tr>
			<td>Tugas </td>
			<td> : </td>
			<td>
				Bertanggung jawab sebagai pembeli Sawit Kebun Pribadi Masyarakat
			</td>
		</tr>
		<tr>
			<td>Peringatan </td>
			<td> : </td>
			<td>
				Apabila terjadi hal-hal yang tidak diinginkan 
				(Pencurian TBS dan lain sebagainya) tanpa sepengetahuan 
				Pemerintah Desa Ratu Elok maka  akan menjadi tanggung jawab 
				Pemilik Angkutan dan Mitra Kerjanya.
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan="3">TBS Kebun Pribadi yang dibeli adalah : </td>
		</tr>
	</table>
	<table width="100%" style="border : 1px solid black; border-collapse: collapse;">
		<thead style="border : 1px solid black; border-collapse: collapse;">
			<th style="border : 1px solid black; border-collapse: collapse;" width="5%">No</th>
			<th style="border : 1px solid black; border-collapse: collapse;" width="30%">Nama Pemilik</th>
			<th style="border : 1px solid black; border-collapse: collapse;" width="15%">Jumlah TBS</th>
			<th style="border : 1px solid black; border-collapse: collapse;" width="15%">Jumlah (Kg)</th>
			<th style="border : 1px solid black; border-collapse: collapse;" width="35%">Alamat</th>
		</thead>
		<tr style="border : 1px solid black; border-collapse: collapse;">
			<td style="vertical-align:middle; border : 1px solid black; border-collapse: collapse;">1</td>
			<td style="vertical-align:middle; border : 1px solid black; border-collapse: collapse;">{{$surat->param->pemilik_nama}}</td>
			<td style="vertical-align:middle; border : 1px solid black; border-collapse: collapse;">{{$surat->param->jumlah_janjang}} Janjang</td>
			<td style="vertical-align:middle; border : 1px solid black; border-collapse: collapse;">{{$surat->param->jumlah_kg}} Kg</td>
			<td style="vertical-align:middle; border : 1px solid black; border-collapse: collapse;">
				{{$surat->param->pemilik_alamat}} 
				Desa {{$desa->nama}} Kecamatan {{$desa->kecamatan}} 
				Kabupaten {{$desa->kabupaten}} Provinsi {{$desa->provinsi}}
			</td>
		</tr>
	</table>
	Demikian Surat Keterangan Jalan Angkutan TBS ini dengan data yang sebenar-benarnya agar dapat digunakan sebagaimana mestinya.
	@include('admin.surat.cetak._template.ttd')
</div>
