@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">
@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen layanan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item"><a href="{{ url('admin/web-layanan/index') }}">Manajemen layanan</a></li>
                <li class="breadcrumb-item active">Detail</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <a href="{{url('admin/web-layanan/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah layanan</a>
                    <a href="{{url('admin/web-layanan/edit', $layanan->layanan_id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit layanan</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->



<div class="row clearfix">
    <div class="col-12">
        <div class="card single_post">
            <div class="body">
                <div class="img-post">
                    <img class="d-block img-fluid mr-5" style="height: auto; width: 80px; object-fit: contain; float:left;" src="{{url('public')}}/web/layanan/{{$layanan->layanan_icon}}" alt="First slide">
                    <h2 class="text-bold mb-5" style="font-weight: bold;">{{$layanan->layanan_nama}}</h2>
                </div>
                
                <p class="text-lowercase">{!! $layanan->layanan_syarat !!}</p>
            </div>                        
        </div>

            
    </div>
</div>

@endsection