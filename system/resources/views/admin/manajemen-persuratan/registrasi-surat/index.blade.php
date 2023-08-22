@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Surat</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Kumpulan Surat</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">


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

               <div class="table-responsive">
                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($list_template as $s)
                     <tr>
                         <td>{{$loop->iteration}}</td>
                         <td>{{ucwords($s->nama_surat)}}</td>
                         <td>
                            <a href="{{url('admin/manajemen-persuratan/registrasi-surat',$s->nama_file)}}/create" class="btn btn-primary">Buat Surat
                            </a>

                            <a href="{{url('admin/manajemen-persuratan/registrasi-surat',$s->nama_file)}}" class="btn btn-dark">Lihat Surat</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-secondary text-white"> 
                    <tr>
                        <th>No</th>
                        <th>Nama Surat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

</div>


@endsection