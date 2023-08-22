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
				<td class="text-right">Model N3</td>
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
		<b><u>SURAT PERSETUJUAN MEMPELAI</u></b>
	</div>
	<div class="nama_surat nomor_surat">
		NOMOR : {{$surat->getNomorSurat()}}
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
			<td colspan="3">Calon Suami : </td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td>{{$suami->nik}}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$suami->nama}}</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$suami->ttl_string}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$suami->jk_string}}</td>
		</tr>
		<tr>
			<td>Warga Negara</td>
			<td>:</td>
			<td>{{$suami->kewarganegaraan_string}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$suami->agama_string}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$suami->pekerjaan->nama}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$suami->alamat_lengkap}}</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td colspan="3">Calon Istri : </td>
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
			<td colspan="3">Demikian surat keterangan ini kami buat sebagaimana perlunya semoga dapat dipergunakan sebagaimana mestinya</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				
			</td>
			<td class="text-center">
				{{$desa->nama}}, {{strftime("%d %B %Y", strtotime($surat->created_at))}}<br>
			</td>
		</tr>
		<tr>
			<td class="text-center">CALON SUAMI</td>
			<td class="text-center">CALON ISTRI</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="text-center">{{$suami->nama}}</td>
			<td class="text-center">{{$istri->nama}}</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" class="text-center">
				Mengetahui : 
			</td>
		</tr>
		<tr>
			<td colspan="2" class="text-center">
				DESA {{strtoupper($desa->nama)}}
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" class="text-center">
				@if($kepala_desa)
					{{$kepala_desa->penduduk->nama}}
				@else
					<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
				@endif</u></b>
			</td>
		</tr>
	</table>
</div>