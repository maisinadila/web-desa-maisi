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
                <div class="d-flex flex-row-reverse">
                    <div class="page_action">

                     <a href="#largeModal" data-toggle="modal" data-target="#largeModal" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Template Surat
                    </a> 

                    <!-- Large Size -->
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="title" id="largeModalLabel">Upload Laporan Anggaran</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('admin/manajemen-persuratan/template-surat/create')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <span>Nama Surat</span>
                                            <input type="text" required placeholder="Judul Laporan" name="nama_surat" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <span>Nomor Awal Surat</span>
                                            <input type="text" required placeholder="Tahun Laporan" name="no_awal_surat" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <span>File</span>
                                            <input type="file" name="file" required class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">UPLOAD</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nomor Awal Surat</th>
                            <th>Nama Surat</th>
                            <th>Template Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_template as $t)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$t->no_awal_surat}}</td>
                            <td>{{ucwords($t->nama_surat)}}</td>
                            <td>
                                <a href="{{url('public/template-surat')}}/{{$t->file}}" download="">Download</a>
                            </td>
                            <td>
                                {{$t->programmer}}
                            </td>
                            <td>
                                @include('admin.template.utils.delete', ['url' => url('admin/manajemen-persuratan/template-surat/delete', $t->template_id)])
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="bg-secondary text-white"> 
                        <tr>
                            <th>No</th>
                            <th>Nomor Awal Surat</th>
                            <th>Nama Surat</th>
                            <th>Template Surat</th>
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