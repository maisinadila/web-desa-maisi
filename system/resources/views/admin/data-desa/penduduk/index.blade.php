@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header">
	<div class="row">
		<div class="col-12">
			<h2>Data Kartu Keluarga</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
				<li class="breadcrumb-item active">Data Kartu Keluarga</li>
			</ul>
		</div>
	</div>
</div>
<!-- akhir breadcrumb -->

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="d-flex flex-row-reverse">
			<div class="page_action">
				<a href="{{url('admin/data-desa/penduduk/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah KK</a>
				<!-- <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button> -->
			</div>
			<div class="p-2 d-flex">

			</div>
		</div>
	</div>
</div>



	<div class="row clearfix">
		<div class="col-lg-12">
			<div class="card">
				<div class="header">
					<h2>Data Kartu Keluarga</h2>                            
				</div>
				<div class="body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover js-basic-example dataTable table-custom" id="myTable">
							<thead>
								<tr>
									<th>No KK</th>
									<th>Kepala Keluarga</th>
									<th>Alamat</th>
									<th>RT/RW</th>
									<th>Desa</th>
									<th>Jumlah Keluarga</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No KK</th>
									<th>Kepala Keluarga</th>
									<th>Alamat</th>
									<th>RT/RW</th>
									<th>Desa</th>
									<th>Jumlah Keluarga</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($list_kk as $kk)
								<tr>
									<td>{{$kk->no_kk}}</td>
									<td>{{ucwords($kk->kepala->nama_lengkap)}}</td>
									<td>{{$kk->alamat}}</td>
									<td>{{$kk->rt}}/{{$kk->rw}}</td>
									<td>{{$kk->desa}}</td>
									<td>
										{{App\Models\Penduduk::where('no_kk',$kk->no_kk)->count()}} Org.
									</td>
									<td>
										<a href="{{url('admin/data-desa/penduduk',$kk->no_kk)}}/detail" class="btn btn-dark">Lihat</a>
										<a href="{{url('admin/data-desa/penduduk',$kk->no_kk)}}/delete" class="btn btn-danger" onclick="return confirm('Yakin menghapus KK ini? ini akan menhapus seluruh anggota keluarga tersebut')">Hapus KK</a>
									</td>
								</tr>
								@endforeach
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<link rel="" src="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"></link>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });

    let table = new DataTable('#myTable');

</script>


@endsection