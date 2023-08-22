<div class="container">
	@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.kop')
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
				@if($kades)
				{{strtoupper($kades->nama)}}
				@else
				<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
				@endif
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>Kepala Desa {{strtoupper($desa->nama_desa)}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					@if($kades)
					{{$desa->alamat}}
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
				<td>{{$penduduk->nama_lengkap}}</td>
			</tr>
			<tr>
				<td>Tempat dan Tanggal Lahir</td>
				<td>:</td>
				<td>{{$penduduk->tempat_lahir}}, {{$penduduk->tanggal_lahir}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{$penduduk->jenis_kelamin}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>RT. {{$kk->rt}}/ RW. {{$kk->rw}} Desa {{$kk->desa}} Kecamatan {{$kk->kecamatan}} Kabupaten {{$kk->kabupaten}} Provinsi {{$kk->provinsi}}</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>{{$penduduk->jenis_pekerjaan}}</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="3">
					Orang tersebut di atas betul-betul Penduduk Desa Kami di Desa {{$desa->nama}} dan menurut Keterangan dari Ketua RT, Ketua RW dan Kepala Dusunnya 
					juga sepanjang pengetahuan kami ia telah meninggal dunia pada {{$detail->tgl}} di {{$detail->tempat}} karena {{$detail->sebab}}
					dan telah dimakamkan/dikebumikan di {{$detail->tempat_pemakam}} dan sebagai Ahli Warisnya adalah: 
				</td>
			</tr>
			<tr></tr>

			<table class=" table-bordered table-condensed">
				<thead>
					<th width="3%" class="tc">No</th>
					<th width="35%" class="tc">Nama</th>
					<th width="7%" class="tc">Jenis Kelamin</th>
					<th width="15%" class="tc">Umur</th>
					<th width="15%" class="tc">Hubungan Dalam Keluarga</th>
					<th class="tc">Tanda Tangan</th>
				</thead>
				<tbody>
					@foreach($list_detail as $d)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{ucwords($d->nama)}}</td>
						<td>{{ucwords($d->jenis_kelamin)}}</td>
						<td>{{ucwords($d->umur)}} Tahun</td>
						<td>{{ucwords($d->hubungan)}}</td>
						<td></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<td colspan="3">{{$template->isi}}</td>


		</table>


		<table width="100%">
			<tr>
				<td width="30%">
					<br>
					Saksi I<br>											
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

				</td>

			</tr>
			<tr>
				<td>
					<u>{{ucwords($detail->saksi_1)}}</u><br>
				</td>
				<td>
					<u>{{ucwords($detail->saksi_2)}}</u><br>
				</td>

			</tr>
		</table>

		<div id="ttd">
			{{ucwords($desa->nama_desa)}}, {{strftime("%d %B %Y", time())}}  <br>
			KEPALA DESA SUKA MULIA <br>
			@if($detail->status == 1)
			&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{!! QrCode::size(100)->generate(url('orisinalitas/surat-keterangan-domisili',$detail->kode_token)); !!} <br>
			&nbsp; &nbsp; &nbsp;{{strtoupper($kades->nama)}}
			@endif

			<br>

		</u></b>
	</div>
</div>
<script>
	window.print();
</script>