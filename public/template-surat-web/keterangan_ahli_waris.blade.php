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
				juga sepanjang pengetahuan kami ia telah meninggal dunia pada Hari {{$surat->param->tanggal}} di {{$surat->param->tempat}} karena {{$surat->param->sebab}}
				dan telah dimakamkan/dikebumikan di {{$surat->param->tempat_pemakaman}} dan sebagai Ahli Warisnya adalah: 
			</td>
		</tr>
	</table>
	<table class="table table-bordered table-condensed">
		<thead>
			<th width="3%" class="tc">No</th>
			<th width="35%" class="tc">Nama</th>
			<th width="7%" class="tc">Jenis Kelamin</th>
			<th width="15%" class="tc">Umur</th>
			<th width="15%" class="tc">Hubungan Dalam Keluarga</th>
			<th class="tc">Tanda Tangan</th>
		</thead>
		<tbody>
			@php $i = 0; @endphp
			@foreach($surat->penduduk->keluarga->penduduk->sortBy('status_kk')->values() as $penduduk)
				@if($penduduk->nik != $surat->penduduk->nik)
					@php  $i++ @endphp
					<tr class="tc">
						<td class="tc">{{$i}}</td>
						<td>{{ucwords(strtolower($penduduk->nama))}}</td>
						<td class="tc">{{$penduduk->jk_char}}</td>
						<td class="tc">{{$penduduk->umur}} Tahun</td>
						<td class="tc">{{$penduduk->hubungan->nama}}</td>
						<td class="tc"></td>
					</tr>
				@endif
			@endforeach
		</tbody>
	</table>
	<table>
		<tr>
			<td>Demikian Surat Keterangan ini kami buat dengan sebenarnya, untuk dapat dipergunakan sebagaimana mestinya.</td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
	</table>
	<table>
		<tr>
			<td width="30%">
				<br>
				Saksi I<br>											
				<br>
				<br>
				<br>
				<br>
				<br>
				
			</td>
			<td width="30%">
				<br>
				Saksi II<br>											
				<br>
				<br>
				<br>
				<br>
				<br>
				
			</td>
			<td>
				{{$desa->nama}}, {{strftime("%d %B %Y", time())}}  <br>
				KEPALA DESA {{strtoupper($desa->desa)}}
				<br>
				<br>
				<br>
				<br>
				<br>
				
			</td>
		</tr>
		<tr>
			<td>
				<u>{{$surat->param->saksi_nama_1}}</u><br>
				{{$surat->param->saksi_hubungan_1}}
			</td>
			<td>
				<u>{{$surat->param->saksi_nama_2}}</u><br>
				{{$surat->param->saksi_hubungan_2}}
			</td>
			<td>
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
