@extends('admin.template.base')
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Pengunjung</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen Pengunjung</li>
            </ul>
        </div>
       
    </div>
</div>
<!-- akhir breadcrumb -->

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Pengunjung Website Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}}
                    <small>Semua user yang ada pada tabel di bawah ini sudah mengunjungi website</small>
                </h2>
            </div>
           
        </div>
    </div>
    
</div>


@endsection