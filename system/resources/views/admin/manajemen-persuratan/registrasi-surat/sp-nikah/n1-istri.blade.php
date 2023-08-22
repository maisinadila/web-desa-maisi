<div class="container">
			@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.kop_tanpa_no')
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
				<td>{{ucwords($desa->nama_desa)}}</td>
				<td class="text-right">Model N1</td>
			</tr>
			<tr>
				<td>KECAMATAN</td>
				<td>:</td>
				<td>{{ucwords($desa->kecamatan)}}</td>
				<td></td>
			</tr>
			<tr>
				<td>KABUPATEN/KOTA</td>
				<td>:</td>
				<td>{{ucwords($desa->kabupaten)}}</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<div class="nama_surat">
		<b><u>SURAT KETERANGAN UNTUK NIKAH</u></b>
	</div>
	<div class="nama_surat nomor_surat">
		NOMOR : {{$detailmodel->n1_istri}}
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
				{{ucwords($kades->nama)}}
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
			<td>{{$detailmodel->nik_istri}}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ucwords($detailmodel->nama_istri)}}</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{ucwords($detailmodel->tempat_lahir_istri)}}, {{$detailmodel->tgl_lahir_istri}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$detailmodel->jk_istri}}</td>
		</tr>
		<tr>
			<td>Warga Negara</td>
			<td>:</td>
			<td>{{$detailmodel->kewarganegaraan_istri}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$detailmodel->agama_istri}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$detailmodel->pekerjaan_istri}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ucwords($detailmodel->alamat_istri)}}</td>
		</tr>
		<tr>
			<td>Bin/Binti</td>
			<td>:</td>
			<td>{{ucwords($detailmodel->nama_ayah_istri)}}</td>
		</tr>
		
		<tr></tr>
		<tr></tr>
		<tr>
			<td colspan="3">Demikian Surat Keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</td>
		</tr>
	</table>
				<div id="ttd">
					{{$desa->nama_desa}}, {{strftime("%d %B %Y", time())}}  <br>
					Kepala Desa {{ucwords($desa->nama_desa)}} <br>
					@if($detail->status == 1)
					&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{!! QrCode::size(100)->generate(url('orisinalitas/surat-pengantar-nikah',$detail->kode_token)); !!} <br>
					&nbsp; &nbsp; &nbsp;{{ucwords($kades->nama)}}
					@endif

					<br>

				</u></b>
			</div>
		</div>


		<script>
			window.print();
		</script>

