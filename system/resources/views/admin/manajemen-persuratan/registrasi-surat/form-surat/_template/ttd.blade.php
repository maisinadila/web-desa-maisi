<div id="ttd">
	{{$desa->nama}}, {{strftime("%d %B %Y", time())}}  <br>
	KEPALA DESA SUKA MULIA

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



<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
<script>
	JsBarcode("#kode_verifikasi").init();
</script>