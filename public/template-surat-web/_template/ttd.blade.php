<div id="ttd">
	{{$desa->nama}}, {{strftime("%d %B %Y", time())}}  <br>
	@if($desa->pejabat_penandatangan == $kepala_desa->nik)
	KEPALA DESA {{strtoupper($desa->nama)}}
	@else
	a/n KEPALA DESA {{strtoupper($desa->nama)}} <br>
	{{$pejabat_penandatangan->perangkat->nama_jabatan_string}}
	@endif

	<br>
	<br>
	<br>
	<br>
	<br>
	<b><u>
		@if($desa->pejabat_penandatangan)
			{{$pejabat_penandatangan->nama}}
		@else
			<label for="" style="background-color: red; color: white">ATUR KEPALA DESA TERLEBIH DAHULU</label>
		@endif
	</u></b>
</div>


<svg id="kode_verifikasi"
  jsbarcode-value="{{$surat->kode_verifikasi}}"
  jsbarcode-textmargin="0"
  jsbarcode-height="10"
  jsbarcode-width="1"  
  jsbarcode-fontoptions="bold">
</svg>

<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
<script>
	JsBarcode("#kode_verifikasi").init();
</script>