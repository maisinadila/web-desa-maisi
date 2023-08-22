<div class="container page-break">
	@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.kop_tanpa_no')
<table>
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
				<td class="text-right">Model N3</td>
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
		<b><u>SURAT PERSETUJUAN MEMPELAI</u></b>
	</div>
	<div class="nama_surat nomor_surat">
		NOMOR : {{$detailmodel->n3}}
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
			<td>{{$detailmodel->tempat_lahir_suami}}, {{$detailmodel->tgl_lahir_suami}}</td>
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
		<tr>
			<td colspan="3">Calon Istri : </td>
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
			<td>{{$detailmodel->tempat_lahir_istri}}, {{$detailmodel->tgl_lahir_istri}}</td>
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
				{{$desa->nama_desa}}, {{strftime("%d %B %Y", strtotime($detail->created_at))}}<br>
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
			<td class="text-center">{{ucwords($detailmodel->nama_suami)}}</td>
			<td class="text-center">{{ucwords($detailmodel->nama_istri)}}</td>
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
					Kepala Desa {{ucwords($desa->nama_desa)}} <br>
					@if($detail->status == 1)
					&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{!! QrCode::size(100)->generate(url('orisinalitas/surat-pengantar-nikah',$detail->kode_token)); !!} <br>
					&nbsp; &nbsp; &nbsp;{{ucwords($kades->nama)}}
					@endif
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
</div>