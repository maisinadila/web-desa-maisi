@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header">
	<div class="row">
		<div class="col-12">
			<h2>Manajemen Galeri</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
				<li class="breadcrumb-item active">Manajemen Galeri</li>
			</ul>
		</div>
	</div>
</div>
<!-- akhir breadcrumb -->

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="d-flex flex-row-reverse">
			<div class="page_action">
				<!-- <a href="{{url('admin/data-desa/penduduk/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah KK</a> -->
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
					<h2>Data Pendidikan <small></small> </h2>                            
				</div>
				<div class="body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenjang Pendidikan</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Jenjang Pendidikan</th>
								</tr>
							</tfoot>
							<tbody>
								@foreach($list_pendidikan as $p)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{strtoupper($p->pendidikan)}}</td>
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


@endsection