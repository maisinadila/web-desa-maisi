@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.style')
<script>
	window.print();
</script>
<style>
		td.text-center {
			text-align: center !important;
		}
	@media print {
		html, body {
		    width: 210mm;
		    height: 330mm;
		  }
	  
	}
</style>
<div class="container">
	<table>
		<thead>
			<th width="30%"></th>
			<th width="2%"></th>
			<th width="68%"></th>
		</thead>
		<tr>
			<th colspan="3" class="text-center">
				<h3>
					<b><u>SURAT HIBAH</u></b>
				</h3>
			</th>
		</tr>
		<tr>
			<td colspan="3">Yang bertanda tangan dibawah ini</td>
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
			<td>Alamat</td>
			<td>:</td>
			<td>{{$penduduk->alamat_lengkap}}</td>
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
		<tr></tr>
		<tr>
			<td colspan="3">
				Dengan Ini Menghibahkan {{$surat->param->hibah_nama}} 
				dengan Luas {{$surat->param->hibah_luas}} m<sup>2</sup>
				yang berlokasi di {{$surat->param->hibah_lokasi}} 
				Desa {{$desa->kecamatan}} Kecamatan {{$desa->kecamatan}} 
				{{$desa->kabupaten}}  Provinsi {{$desa->provinsi}} ,
				dengan batas-batas sebagai berikut
				</td>
		</tr>
		<tr>
			<td>Utara</td>
			<td>:</td>
			<td>
				{{$surat->param->hibah_utara}} m, 
				dengan Batas Tanah {{$surat->param->hibah_utara_batas}}
			</td>
		</tr>
		<tr>
			<td>Barat</td>
			<td>:</td>
			<td>
				{{$surat->param->hibah_barat}} m, 
				dengan Batas Tanah {{$surat->param->hibah_barat_batas}}
			</td>
		</tr>
		<tr>
			<td>Timur</td>
			<td>:</td>
			<td>
				{{$surat->param->hibah_timur}} m, 
				dengan Batas Tanah {{$surat->param->hibah_timur_batas}}
			</td>
		</tr>
		<tr>
			<td>Selatan</td>
			<td>:</td>
			<td>
				{{$surat->param->hibah_selatan}} m, 
				dengan Batas Tanah {{$surat->param->hibah_selatan_batas}}
			</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td>Kepada</td>
		</tr>
		<tr></tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$penerima->nama}}</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td>:</td>
			<td>{{$penerima->ttl_string}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$penerima->jk_string}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$penerima->alamat_lengkap}}</td>
		</tr>

		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$penerima->agama_string}}</td>
		</tr>
		<tr>
			<td>Status Perkawinan</td>
			<td>:</td>
			<td>{{$penerima->status_kawin_string}}</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>{{$penerima->pekerjaan->nama}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td colspan="3">
				Demikian Surat Hibah ini kami buat dan kami tanda tangani dalam keadaan sadar, 
				sehat wal'afiat tanpa ada unsur paksaan dari pihak manapun dan agar dapat 
				digunakan sebagaimana mestinya
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td colspan="3" class="text-center">
				{{$desa->nama}}, {{strftime("%d %B %Y", time())}}  <br>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td class="text-center">
				PENERIMA HIBAH,
				<br>
				<br>
				<br>
				<br>
				<br>
				<b><u>
					<span>{{$penerima->nama}}</span>
				</u></b>
			</td>
			<td class="text-center">
				PEMBERI HIBAH
				<br>
				<br>
				<br>
				<br>
				<br>
				<b><u>
					<span>{{$penduduk->nama}}</span>
				</u></b>
			</td>
		</tr>
	</table>
	<table>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td width="30%">
				<div class="col-md-12">
					<br>
					Saksi<br>
					@foreach($surat->param->saksi as $saksi)
					<div class="form-group">
						{{$saksi}}
					</div>
					@endforeach
				</div>
			</td>
			<td width="30%">
				<div class="col-md-12">
					<br>
					Tanda Tangan Saksi<br>
					@foreach($surat->param->saksi as $saksi)
					<div class="form-group">
						..............................
					</div>
					@endforeach
				</div>
			</td>
			<td width="10%"></td>
			<td>
				KEPALA DESA {{strtoupper($desa->desa)}}
				<br>
				<br>
				<br>
				<br>
				<br>
				<b><u>
					@if($kepala_desa)
						{{$kepala_desa->penduduk->nama}}
					@else
						<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
					@endif
				</u></b>
			</td>
		</tr>
	</table>
</div>
