@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Manajemen Persuratan</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Kumpulan Surat</a></li>                            
                <li class="breadcrumb-item active">Tambah {{ucwords($template->nama_surat)}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- akhir breadcrumb -->



<div class="row clearfix">
  <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('admin/manajemen-persuratan/registrasi-surat/surat-keterangan-beda-nama/createtambahan', $surat->surat_id)}}"  method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label >Jenis/Nama surat yang memiliki nama yg salah</label>
                        <input type="text" name="surat" class="form-control">
                        <small id="emailHelp" class="form-text text-muted">contoh: Ijazah SMA, Akte Lahir, SK Tanah, dan sebagainya</small>
                    </div>
                    <div class="form-group">
                        <label >Nama yang salah</label>
                        <input type="text" name="salahnama" class="form-control">
                    </div>
       
                    <button type="submit" class="btn btn-primary">Buat Surat</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection