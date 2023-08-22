<div class="container  page-break">
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
				<td class="text-right">Model N1</td>
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
		<b><u>SURAT KETERANGAN UNTUK NIKAH</u></b>
	</div>
	<div class="nama_surat nomor_surat">
		NOMOR : {{$suami_n1->getNomorSurat()}}
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
		<tr>
			<td>Bin/Binti</td>
			<td>:</td>
			<td>{{$suami->nama_ayah}}</td>
		</tr>
		<tr>
			<td>Status Perkawinan</td>
			<td>:</td>
			<td>{{$suami->status_kawin_string}}</td>
		</tr>
		@if($suami->status_kawin == 2)
		@if($suami->jk == 1)
		<tr>
			<td>Jumlah Istri</td>
			<td>:</td>
			<td>{{$suami->pasangan->count()}}</td>
		</tr>
		@endif
		<tr>
			<td>Nama @if($suami->jk == 1) Istri @else Suami  @endif Terdahulu</td>
			<td>:</td>
			<td>{{$suami->pasangan[0]->nama}}</td>
		</tr>
		@endif
		<tr></tr>
		<tr></tr>
		<tr>
			<td colspan="3">Demikian Surat Keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</td>
		</tr>
	</table>
	@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.ttd')
</div>