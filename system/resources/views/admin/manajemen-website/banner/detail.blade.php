@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header">
    <div class="row">
        <div class="col-12">
            <h2>Manajemen Galeri</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item"><a href="{{url('admin/web-galeri/index')}}">Manajemen Galeri</a></li>
                <li class="breadcrumb-item active">Detail</li>
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


@endsection