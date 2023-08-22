@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Berita</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Manajemen Berita</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">

                    <a href="{{url('admin/web-berita/create')}}" class="btn btn-primary"><i class="fa fa-upload"></i> Upload Berita</a>

                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->



<div class="row clearfix">
    <div class="col-12">
        <div class="card">
            <div class="body search">
                <div class="input-group mb-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">                                    
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <h3>Visi Misi Desa</h3>

                <form action="{{url('admin/profil-desa/visi-misi-desa/update',$profil->profil_id)}}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-md-6">
                            <span>Visi Desa</span>
                            <textarea name="visi" id="" cols="30" rows="10" class="form-control">{!!nl2br($profil->visi)!!}</textarea>
                        </div>
                        <div class="col-md-6">
                            <span>Misi Desa</span>
                            <textarea name="misi" id="" cols="30" rows="10" class="form-control">{!!nl2br($profil->misi)!!}</textarea>
                        </div>
                    </div>

                    <div class="form-group mt-3 mb-5">
                        <button class="btn btn-primary float-right">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection