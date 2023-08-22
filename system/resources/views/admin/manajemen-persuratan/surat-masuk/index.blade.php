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
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
               <li class="breadcrumb-item active">Surat Masuk</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">

                    <a href="#largeModal" data-toggle="modal" data-target="#largeModal" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Surat Masuk
                    </a> 
                    <!-- Large Size -->
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="title" id="largeModalLabel">Upload Surat Masuk</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('admin/manajemen-persuratan/s-masuk/store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <span>Nomor Surat</span>
                                            <input type="text" required placeholder="..." name="nomor" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <span>Jenis Surat</span>
                                            <input type="text" required placeholder="..." name="jenis" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <span>Perihal Surat</span>
                                            <input type="text" required placeholder="..." name="perihal" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <span>Pengirim</span>
                                            <input type="text" required placeholder="..." name="pengirim" class="form-control">
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
                            <th>No Surat</th>
                            <th>Jenis Surat</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($surat as $data)
                     <tr>
                         <td>{{$loop->iteration}}</td>
                         <td>{{$data->surat_nomor}}</td>
                         <td>
                            No: {{$data->surat_jenis}} <br>
                            Hal: {{$data->surat_perihal}}
                         </td>
                         <td>
                            <a href="{{url('public/surat-masuk', $data->surat_file)}}" download><i class="fa fa-file"></i> Download</a>
                         </td>
                        
                         <td>
                            <div class="btn-group">
                                <a href="{{url('admin/manajemen-persuratan/s-masuk/detail', $data->surat_id)}}" class="btn btn-primary">Lihat</a>
                                <a href="{{url('admin/manajemen-persuratan/s-masuk/delete', $data->surat_id)}}" class="btn btn-danger">delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-secondary text-white"> 
                    <tr>
                        <th>No</th>
                        <th>No Surat</th>
                        <th>Jenis Surat</th>
                        <th>Perihal</th>
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