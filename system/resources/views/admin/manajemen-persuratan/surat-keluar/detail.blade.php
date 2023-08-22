@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">

<style>
    td{
        font-size: 18px;
        font-weight: medium;
    }
</style>
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
               <li class="breadcrumb-item active"><a href="{{url('admin/manajemen-persuratan/s-keluar')}}">Surat Keluar</a></li>
               <li class="breadcrumb-item active">Detail</li>
            </ul>
        </div>
      
    </div>
</div>
<!-- akhir breadcrumb -->



    <div class="row clearfix">
        
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <table>
                        <tbody>
                            <tr>
                                <td style="width: 150px">Nomor Surat </td>
                                <td>: {{$surat->surat_nomor}}</td>
                            </tr>
                            <tr>
                                <td>Jenis Surat </td>
                                <td>: {{$surat->surat_jenis}}</td>
                            </tr>
                            <tr>
                                <td>Perihal </td>
                                <td>: {{$surat->surat_perihal}}</td>
                            </tr>
                            <tr>
                                <td>Pengirim </td>
                                <td>: {{$surat->surat_pengirim}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">

                    <embed src="{{url('public/surat-keluar', $surat->surat_file)}}" type="application/pdf" width="100%" height="600px" />
                </div>
            </div>
        </div>
    </div>




@endsection