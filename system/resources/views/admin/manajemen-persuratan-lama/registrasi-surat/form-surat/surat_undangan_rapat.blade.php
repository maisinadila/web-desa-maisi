@foreach($surat->param->penerima as $penerima)
<div class="container @if(!$loop->first) page-break @endif">
	@include('admin.surat.cetak._template.kop_tanpa_no')
	<table width="100%" style="margin-top: 30px">
		<tr>
			<td width="60%">
				
			</td>
			<td width="40%">
				{{$desa->nama}}, {{strftime("%d %B %Y", time())}}
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="14%">
				No
			</td>
			<td>:</td>
			<td width="45%">
				{{$surat->getNomorSurat()}}
			</td>
			<td width="40%">
				Kepada, 
			</td>
		</tr>
		<tr>
			<td>
				Lampiran
			</td>
			<td>:</td>
			<td>
				{{$surat->param->lampiran}}
			</td>
			<td>
				Yth, {{$penerima}}
			</td>
		</tr>
		<tr>
			<td>
				Perihal
			</td>
			<td>:</td>
			<td>
				<b><u>{{strtoupper($surat->param->perihal)}}</u></b>
			</td>
			<td>
				Di, <br>
				<span style="margin-left : 50px;">Tempat</span>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="padding: 20px"></td>
		</tr>
		<tr style="margin-top :50px">
			<td></td>
			<td></td>
			<td colspan="2">
				Dengan Hormat, <br>
				<p style="text-indent: 50px;">{{$surat->param->isi}}</p>
			</td>
		</tr>
		<tr>
			<td colspan="4" style="padding: 5px"></td>
		</tr>
		<tr style="margin-top :50px">
			<td></td>
			<td></td>
			<td colspan="2">
				<table width="100%" style="padding-left: 50px">
					<tr>
						<td width="29%"><b>Hari / Tanggal </b></td>
						<td>:</td>
						<td width="70%">
							<b>{{$surat->param->hari_tanggal}}</b>
						</td>
					</tr>
					<tr>
						<td width="29%"><b>Pukul </b></td>
						<td>:</td>
						<td width="70%">
							<b>{{$surat->param->pukul}}</b>
						</td>
					</tr>
					<tr>
						<td width="29%"><b>Tempat </b></td>
						<td>:</td>
						<td width="70%">
							<b>{{$surat->param->tempat}}</b>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td colspan="2" style="padding-top: 15px">
				Demikian surat ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
			</td>
		</tr>
	</table>
	<div id="ttd">
		KEPALA DESA {{strtoupper($desa->nama)}}
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
			@endif</u></b>
	</div>
</div>
@endforeach

<style>
		td.text-center {
			text-align: center !important;
		}
	@media print {
	  .page-break {
	    page-break-before: always;
	  }
	  /* include this style if you want the first row to be on the same page as whatever precedes it */
	  /*
	  .rows-print-as-pages .row:first-child {
	    page-break-before: avoid;
	  }
	  */
	}
</style>