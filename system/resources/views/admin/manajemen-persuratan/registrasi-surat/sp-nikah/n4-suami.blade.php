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
				<td>{{strtoupper($desa->nama_desa)}}</td>
				<td class="text-right">Model N4</td>
			</tr>
			<tr>
				<td>KECAMATAN</td>
				<td>:</td>
				<td>{{strtoupper($desa->kecamatan)}}</td>
				<td></td>
			</tr>
			<tr>
				<td>KABUPATEN/KOTA</td>
				<td>:</td>
				<td>{{strtoupper($desa->kabupaten)}}</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<div class="nama_surat">
		<b><u>SURAT KETERANGAN TENTANG ORANG TUA</u></b>
	</div>
	<div class="nama_surat nomor_surat">
		NOMOR : {{$detailmodel->n4_suami}}
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
				<td> {{ucwords($kades->jabatan)}}</td>
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
				<td colspan="3">I</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->nama_ayah_suami)}}</td>
			</tr>
			<tr>
				<td>Tempat dan Tanggal Lahir</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->tempat_lahir_ayah_suami)}}, {{$detailmodel->tgl_lahir_ayah_suami}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{$detailmodel->jk_ayah_suami}}</td>
			</tr>
			<tr>
				<td>Warga Negara</td>
				<td>:</td>
				<td>{{$detailmodel->kewarganegaraan_ayah_suami}}</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>{{$detailmodel->agama_ayah_suami}}</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>{{$detailmodel->pekerjaan_ayah_suami}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->alamat_ayah_suami)}}</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td colspan="3">II</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->nama_ibu_suami)}}</td>
			</tr>
			<tr>
				<td>Tempat dan Tanggal Lahir</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->tempat_lahir_ibu_suami)}}, {{$detailmodel->tgl_lahir_ibu_suami}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{$detailmodel->jk_ibu_suami}}</td>
			</tr>
			<tr>
				<td>Warga Negara</td>
				<td>:</td>
				<td>{{$detailmodel->kewarganegaraan_ibu_suami}}</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>{{$detailmodel->agama_ibu_suami}}</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>{{$detailmodel->pekerjaan_ibu_suami}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->alamat_ibu_suami)}}</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td colspan="3">Adalah benar ayah dan ibu dari seorang : </td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td>{{$detailmodel->nik_suami}}</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->nama_suami)}}</td>
			</tr>
			<tr>
				<td>Tempat dan Tanggal Lahir</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->tempat_lahir_suami)}}, {{$detailmodel->tgl_lahir_suami}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{$detailmodel->jk_suami}}</td>
			</tr>
			<tr>
				<td>Warga Negara</td>
				<td>:</td>
				<td>{{$detailmodel->kewarganegaraan_suami}}</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>{{$detailmodel->agama_suami}}</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>{{$detailmodel->pekerjaan_suami}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ucwords($detailmodel->alamat_suami)}}</td>
			</tr>
			<tr></tr>
			<tr></tr>

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

