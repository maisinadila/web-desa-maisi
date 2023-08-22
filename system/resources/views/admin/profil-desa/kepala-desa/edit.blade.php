@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>{{$breadcrumb_title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">{{$breadcrumb}}</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">

                    <a href="{{url('admin/profil-desa/perangkat-desa/kepala-desa')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Perangkat Desa</a>

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
                <form action="{{url('admin/profil-desa/kepala-desa-dan-sambutan/update',$profil->profil_id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <span>Sambutan</span>
                            <textarea name="isi" id="" cols="30" rows="10" class="form-control">{!!nl2br($profil->sambutan_kepala)!!}</textarea>
                        </div><!-- 

                        <div class="col-md-4 mt-3">
                            <span>Pilih Kepala Desa</span>
                            <select name="isi" id="" class="form-control">
                                <option value="{{$kepala->user_id}}">{{ucwords($kepala->nama)}}</option>
                                @foreach($list_perangkat as $p)
                                <option value="{{$p->user_id}}">{{ucwords($p->nama)}}</option>
                                @endforeach
                            </select>
                        </div> -->

                        <div class="col-md-12">
                            <button class="btn btn-primary mt-3"> SIMPAN </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

</div>


@endsection