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
               <li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Kumpulan Surat</a></li>                            
               <li class="breadcrumb-item active">{{ucwords($jenis->nama_surat)}}</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
               
                    <a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , 'create' ])}}" class="btn btn-primary"><i class="fa fa-plus"></i> Buat {{$jenis->nama_surat}}</a>

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
                            <th>Nama Pemohon</th>
                            <th>Tgl. Mohon</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_surat->sortByDesc('surat_id') as $data)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ucwords($data->penduduk->nama_lengkap)}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>
                            @if($data->status == 0)
                            <span style="color: #e8bb35">Menunggu TTD </span>
                            @elseif($data->status == 1)
                            <span style="color: #2e8f1f">Diterima</span>
                            @elseif($data->status == 2)
                            <span style="color: #c70039">Ditolak</span>
                            @endif

                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'show' ])}}" class="btn btn-primary btn-sm">Lihat</a>

                                <a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak' ])}}" target="_blank" class="btn btn-dark btn-sm">Cetak</a>

                                @if($data->status == 0)
                                @include('admin.template.utils.delete', ['url' => url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'delete' ])])
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-secondary text-white"> 
                    <tr>
                        <th>No</th>
                        <th>Nama Pemohon</th>
                        <th>Tgl. Mohon</th>
                        <th>Status</th>
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