@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Layanan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen Layanan</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
              
                    <a href="{{url('admin/web-layanan/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Layanan</a>
                   
                </div>
                <div class="p-2 d-flex">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Layanan Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}  yang diberikan kepada masyaratakat 
                    <small>Layanan ini akan ditampilkan pada website desa</small>
                </h2>
            </div>
            <div class="body">
                <div class="row clearfix mt-4">
                    @foreach($layanan as $data)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="currency_state d-flex">
                                    <div><img src="{{url('public/web/layanan')}}/{{$data->layanan_icon}}" width="80" /></div>
                                    <div class="ml-3">
                                        <h5 class="mb-0">{{$data->layanan_nama}}</h5>
                                        <div class="name mt-2">{!! $data->syarat_singkat !!}</div>
                                        <a href="{{url('admin/web-layanan/detail', $data->layanan_id)}}"> . . . . Selengkapnya</a>
                                        <div class="float-right">
                                            @include('admin.template.utils.delete', ['url' => url('admin/web-layanan/delete', $data->layanan_id)])
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
</div>


@endsection