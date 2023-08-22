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

                    <a href="{{url('admin/profil-desa/perangkat-desa/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Perangkat Desa</a>

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

    @foreach($list_perangkat as $p)

    <div class="col-md-3 col-6">
        <a href="#exampleModal{{$loop->iteration}}" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">
           <div class="card">
            <div class="card-body">
                <img src="{{url('public/perangkat-desa')}}/{{$p->foto}}" style="border: 5px;" width="100%" alt="">
            </div>
            <div class="card-header">
                <center>
                    <b>{{ucwords($p->nama)}}</b>
                </center>
            </div>
        </div>
    </a>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
      <form action="{{url('admin/profil-desa/perangkat-desa',$p->user_id)}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-md-6 mt-3">
                <span>Nama Perangkat Desa</span>
                <input type="text" class="form-control" required name="nama" value="{{ucwords($p->nama)}}">
            </div>
            <div class="col-md-6 mt-3">
                <span>Jabatan</span>
                <input type="text" class="form-control" required name="jabatan" value="{{ucwords($p->jabatan)}}">
            </div>
            <div class="col-md-6 mt-3">
                <span>No. Telp</span>
                <input type="text" class="form-control" required name="notlp" value="{{ucwords($p->notlp)}}">
            </div>

            <div class="col-md-6 mt-3">
                <span>Email</span>
                <input type="email" class="form-control" required name="email" value="{{ucwords($p->email)}}">
            </div>
            <div class="col-md-6 mt-3">
                <span>Foto</span>
                <input type="file" class="form-control" accept="image/*" name="foto">
            </div>

            <div class="col-md-12 mt-3">
                <button class="btn btn-primary"> Update </button>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <a href="{{url('admin/profil-desa/perangkat-desa',$p->user_id)}}/hapus" onclick="return confirm('Yakin menghapus perangkat desa ini?')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Perangkat Desa</a>
</div>
</div>
</div>
</div>
@endforeach

</div>


@endsection