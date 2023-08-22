<div class="container">
			@include('admin.manajemen-persuratan.registrasi-surat.form-surat._template.kop')
			
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
						Pada Hari  kedatangan seorang warga : 
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
					<td class="text-capitalize">{{$penduduk->nama_lengkap}}</td>
				</tr>
				<tr>
					<td colspan="2">Tempat dan Tanggal Lahir</td>
					<td>:</td>
					<td>{{$penduduk->tempat_lahir}}, {{$penduduk->tanggal_lahir}}</td>
				</tr>
				<tr>
					<td colspan="2">Jenis Kelamin</td>
					<td>:</td>
					<td>{{$penduduk->jenis_kelamin}}</td>
				</tr>
				<tr>
					<td colspan="2">Pekerjaan</td>
					<td>:</td>
					<td>{{$penduduk->jenis_pekerjaan}}</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>Dusun</td>
					<td>:</td>
					<td>{{$kk->dusun}}</td>
				</tr>
				<tr>
					<td></td>
					<td>RT / RW</td>
					<td>:</td>
					<td>{{$kk->rt}} / {{$kk->rw}}</td>
				</tr>
				<tr>
					<td></td>
					<td>Desa</td>
					<td>:</td>
					<td>{{$kk->desa}}</td>
				</tr>
				<tr>
					<td></td>
					<td>Kecamatan</td>
					<td>:</td>
					<td>{{$kk->kecamatan}}</td>
				</tr>
				<tr>
					<td></td>
					<td>Kabupaten</td>
					<td>:</td>
					<td>{{$kk->kabupaten}}</td>
				</tr>
				<tr></tr>
				<tr>
					<td colspan="2">Melapor telah kehilangan</td>
					<td>:</td>
					<td>
					{{$detail->kehilangan_barang}}
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td colspan="2">Penyebab Kehilangan</td>
					<td>:</td>
					<td>
						{{$detail->alasan_kehilangan}}
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td colspan="3">{{$template->isi}}</td>
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
						<td>KEPALA DESA</td>
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
						<td class="text-capitalize">
							<b><u>
								@if($kades)
									{{$kades->nama}}
								@else
									<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
								@endif
							</u></b>
						</td>
						<td></td>
						<td class="text-capitalize">
							<b><u>
								{{$penduduk->nama_lengkap}}
							</u></b>
						</td>
					</tr>
				</tbody>
			</table>
		</div>