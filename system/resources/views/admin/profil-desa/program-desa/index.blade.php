@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Program Desa</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Program Desa</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">

                    <a href="{{url('admin/profil-desa/program-desa/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Program Desa</a>

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
    <div class="col-md-12">
    </div>
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Program</th>
                            <th>Tahun Program</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_program as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->nama_program}}</td>
                            <td>{{$p->tahun}}</td>
                            <td><a href="{{url('public')}}/program-desa/{{$p->file}}" download="" class="btn btn-dark"><i class="fa fa-download"></i></a></td>
                            <td>
                                <a href="{{url('admin/profil-desa/program-desa/delete',$p->program_id)}}" onclick="return confirm('yakin menghapus program desa ini?')" class="btn btn-danger">Hapus</a>
                                <a href="{{url('admin/profil-desa/program-desa/show',$p->program_id)}}" class="btn btn-dark">Lihat</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection