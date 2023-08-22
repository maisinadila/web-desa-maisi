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

                                        <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal{{$data->surat_id}}"> Cetak Surat</button>
                                        <!-- Modal -->
                                        <div class="modal fade " id="exampleModal{{$data->surat_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Surat Pengantar Nikah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                            <table class=" dataTable table-sm" style="width:100%">
                                                <thead class="bg-secondary text-white">
                                                    <tr>
                                                        <th>Nama Pemohon</th>
                                                        <th>Tgl. Mohon</th>
                                                        <th>Surat Pengantar</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td>{{ucwords($data->penduduk->nama_lengkap)}}</td>
                                                    <td>{{$data->created_at}}</td>
                                                    <td>
                                                     <a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak' ])}}" target="_blank" class="btn btn-dark btn-sm"><i class="fa fa-print"></i> Cetak</a>

                                                 </td>
                                             </tr>
                                         </table>
                                         <table class="mt-5 table-sm" style="width:100%">
                                            <thead class="bg-secondary text-white">
                                                <tr>
                                                    <th>Suami/Istri</th>
                                                    <th>N1</th>
                                                    <th>N2</th>
                                                    <th>N3</th>
                                                    <th>N4</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><b>Suami</b></td>
                                                    <td><a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak-n1-suami' ])}}" target="_blank" class="btn btn-sm btn-dark"><i class="fa fa-print"></i> Cetak</a></td>
                                                    <td><a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak-n2-suami' ])}}" target="_blank" class="btn btn-sm btn-dark"><i class="fa fa-print"></i> Cetak</a></td>
                                                    <td rowspan="2"><a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak-n3' ])}}" target="_blank" class="btn btn-sm btn-dark"><i class="fa fa-print"></i> Cetak</a></td>
                                                    <td><a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak-n4-suami' ])}}" target="_blank" class="btn btn-sm btn-dark"><i class="fa fa-print"></i> Cetak</a></td>
                                                </tr>

                                                <tr>
                                                    <td><b>Istri</b></td>
                                                    <td><a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak-n1-istri' ])}}" target="_blank" class="btn btn-sm btn-dark"><i class="fa fa-print"></i> Cetak</a></td>
                                                    <td><a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak-n2-istri' ])}}" target="_blank" class="btn btn-sm btn-dark"><i class="fa fa-print"></i> Cetak</a></td>
                                                    <td><a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak-n4-istri' ])}}" target="_blank" class="btn btn-sm btn-dark"><i class="fa fa-print"></i> Cetak</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <a href="{{url('admin/manajemen-persuratan/registrasi-surat', [ $jenis->nama_file , $data->surat_id , 'cetak' ])}}" target="_blank" class="btn btn-dark btn-sm">Cetak</a> -->

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