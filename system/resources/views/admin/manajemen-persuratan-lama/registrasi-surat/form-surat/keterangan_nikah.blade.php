@if($suami_warga_desa)
@include('admin.surat.cetak.nikah.suami_n1')
@include('admin.surat.cetak.nikah.suami_n2')
@include('admin.surat.cetak.nikah.suami_n4')
@endif
@if($istri_warga_desa)
@include('admin.surat.cetak.nikah.istri_n1')
@include('admin.surat.cetak.nikah.istri_n2')
@include('admin.surat.cetak.nikah.istri_n4')
@endif
@include('admin.surat.cetak.nikah.n3')
<style>
		td.text-center {
			text-align: center !important;
		}
	@media print {
		html, body {
		    width: 210mm;
		    height: 330mm;
		  }
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