@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Struktur Organisasi Desa</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
                <li class="breadcrumb-item active">Struktur Organisasi Desa</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">

                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Edit Struktur Organisasi
                </button>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Edit Struktur Organisasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{url('admin/profil-desa/struktur-organisasi/update',$profil->profil_id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <span>Upload Struktur Organisasi</span>
                        <input type="file" name="foto" required class="form-control" accept="image/*">
                        <button class="btn btn-primary mt-3">Simpan Struktur Organisasir</button>
                    </form>
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
 <img src="{{url('public')}}/struktur-organisasi/{{$profil->struktur_organisasi}}" width="100%" alt="">

</div>


@endsection